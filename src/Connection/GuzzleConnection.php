<?php

declare (strict_types=1);

namespace PApi\Connection;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use PApi\Exception\ConnectionException;

class GuzzleConnection extends AbstractConnection
{
    /** @var Client */
    private $client;

    protected function connect() : void
    {
        if ($this->client === null) {
            $this->client = new Client([
                'base_uri' => $this->getBaseUri(),
                'http_errors' => false,
                'headers' => $this->config['connectionHeaders'] + [
                    'timeout' => $this->config['timeout'],
                ],
            ]);
        }
    }

    protected function getBaseUri() : string
    {
        return (string) Uri::fromParts([
            'scheme' => $this->config['scheme'],
            'host' => $this->config['host'],
            'port' => $this->config['port'],
            'path' => $this->config['path'],
            'user' => $this->config['username'],
            'pass' => $this->config['password'],
        ]);
    }

    /**
     * @param mixed[] $config
     */
    public function create(array $config) : ConnectionInterface
    {
        return new self($config);
    }

    /**
     * @param mixed[] $query
     */
    public function executeGet(string $endPoint, array $query = []) : string
    {
        return $this->executeRequest('GET', $endPoint, $query);
    }

    /**
     * @param mixed[] $query
     */
    public function executePost(string $endPoint, array $query = []) : string
    {
        return $this->executeRequest('POST', $endPoint, $query);
    }

    /**
     * @param mixed[] $query
     */
    private function executeRequest(string $method, string $endPoint, array $query = []) : string
    {
        if ($this->client === null) {
            $this->connect();
        }

        //for nested arrays, numeric keys are used (e.g. matches => [a,b] produces ?matches[0]=a&matches[1]=b) which is undesired
        $queryParameters = http_build_query($query);
        $queryString = preg_replace('/%5B(?:[0-9]|[1-9][0-9]+)%5D=/', '%5B%5D=', $queryParameters);

        $response = $this->client->request(
            $method,
            $endPoint,
            [
                'query' => $queryString,
            ]
        );

        if ($response->getStatusCode() !== 200 && $response->getStatusCode() !== 204) {
            $parts = parse_url($this->getBaseUri());
            $parts['path'] = $parts['path'] . $endPoint;
            $parts['query'] = http_build_query($query);
            $uri = Uri::fromParts($parts);
            throw new ConnectionException(
                sprintf(
                    'Request %s `%s` returned with code %d and message `%s`',
                    $method,
                    (string) $uri,
                    $response->getStatusCode(),
                    $response->getBody()->getContents()
                )
            );
        }

        return $response->getBody()->getContents();
    }
}
