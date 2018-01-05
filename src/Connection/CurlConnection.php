<?php

declare (strict_types=1);

namespace PApi\Connection;

use PApi\Exception\ConnectionException;

class CurlConnection extends AbstractConnection
{
    /** @var resource|null */
    private $connection;

    public function __destruct()
    {
        if ($this->connection !== null) {
            curl_close($this->connection);
        }
    }

    protected function connect() : void
    {
        $this->connection = curl_init();
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
    public function execute(string $endPoint, array $query = []) : string
    {
        if ($this->connection === null) {
            $this->connect();
        }
        curl_reset($this->connection);

        $queryParameters = http_build_query($query);
        $queryString = preg_replace('/%5B(?:[0-9]|[1-9][0-9]+)%5D=/', '%5B%5D=', $queryParameters);
        $uriParts = $this->getBaseUriParts();
        $uriParts['path'] .= $endPoint;
        $uriParts['query'] = $queryString;
        $url = $this->buildUrl($uriParts);

        curl_setopt($this->connection, CURLOPT_URL, $url);
        curl_setopt($this->connection, CURLOPT_TIMEOUT, $this->config['timeout']);
        curl_setopt($this->connection, CURLOPT_RETURNTRANSFER, true);
        $curlHeaders = array_map(function ($key, $value) {
            return $key . ':' . $value;
        }, $this->config['connectionHeaders']);
        curl_setopt($this->connection, CURLOPT_HTTPHEADER, $curlHeaders);

        $response = curl_exec($this->connection);
        if ($response === false) {
            throw new ConnectionException(
                sprintf(
                    'Request GET %s returned with code %d and message `%s`',
                    $url,
                    curl_getinfo($this->connection, CURLINFO_RESPONSE_CODE),
                    curl_error($this->connection)
                )
            );
        }

        return $response;
    }

    /**
     * @param string[] $parts
     */
    private function buildUrl(array $parts) : string
    {
        $url = $parts['scheme'] . '://';

        if (isset($parts['user'])) {
            $url .= $parts['user'];
            if (isset($parts['pass'])) {
                $url .= ':' . $parts['pass'];
            }
            $url .= '@';
        }

        $url .= $parts['host'];

        if (isset($parts['port'])) {
            $url .= ':' . $parts['port'];
        }

        if (isset($parts['path'])) {
            $url .= $parts['path'];
        }

        if (isset($parts['query'])) {
            $url .= '?' . $parts['query'];
        }

        return $url;
    }

    /**
     * @return string[]
     */
    private function getBaseUriParts() : array
    {
        return [
            'scheme' => $this->config['scheme'],
            'host' => $this->config['host'],
            'port' => $this->config['port'],
            'path' => $this->config['path'],
            'user' => $this->config['username'],
            'pass' => $this->config['password'],
        ];
    }
}
