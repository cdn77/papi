<?php

declare (strict_types=1);

namespace PApi;

use PApi\Connection\ConnectionInterface;
use PApi\Connection\GuzzleConnection;
use PApi\Response\ArrayValuesResponse;
use PApi\Response\DataResponse;
use PApi\Response\Meta\ArrayValuesResponseMeta;
use PApi\Response\Meta\DataResponseMeta;

class Client
{
    public const DATETIME_FORMAT = 'U.u';

    /** @var ConnectionInterface */
    private $connection;

    /** @var mixed[] */
    private $config = [
        'scheme' => 'http',
        'host' => 'localhost',
        'port' => 9090,
        'path' => '/api/v1/',
        'timeout' => 30,
        'username' => null,
        'password' => null,
        'connectionHeaders' => [],
        'connectionType' => GuzzleConnection::class,
    ];

    /**
     * @param mixed[] $config
     */
    public function __construct(array $config)
    {
        $this->config = array_merge($this->config, $config);

        $this->connect();
    }

    public function connect() : void
    {
        $this->connection = new $this->config['connectionType']($this->config);
    }

    public function getAlertManagers() : DataResponse
    {
        return DataResponseMeta::fromJson($this->connection->execute('alertmanagers'));
    }

    public function getTargets() : DataResponse
    {
        return DataResponseMeta::fromJson($this->connection->execute('targets'));
    }

    public function getLabelValues(string $label) : ArrayValuesResponse
    {
        return ArrayValuesResponseMeta::fromJson(
            $this->connection->execute('label/' . urlencode($label) . '/values')
        );
    }

    /**
     * @param string[] $match
     */
    public function getSeries(array $match, \DateTimeInterface $start, \DateTimeInterface $end) : ArrayValuesResponse
    {
        return ArrayValuesResponseMeta::fromJson(
            $this->connection->execute('series', [
                'match' => array_values($match),
                'start' => $start->format(self::DATETIME_FORMAT),
                'end' => $end->format(self::DATETIME_FORMAT),
            ])
        );
    }

    public function getQueryRange(
        string $query,
        \DateTimeInterface $start,
        \DateTimeInterface $end,
        string $step,
        ?int $timeout = null
    ) : DataResponse {
        if ($timeout === null) {
            $timeout = $this->config['timeout'];
        }

        return DataResponseMeta::fromJson(
            $this->connection->execute('query_range', [
                'query' => $query,
                'start' => $start->format(self::DATETIME_FORMAT),
                'end' => $end->format(self::DATETIME_FORMAT),
                'step' => $step,
                'timeout' => $timeout,
            ])
        );
    }

    public function getQuery(
        string $query,
        \DateTimeInterface $time,
        ?int $timeout = null
    ) : DataResponse {
        if ($timeout === null) {
            $timeout = $this->config['timeout'];
        }

        return DataResponseMeta::fromJson(
            $this->connection->execute('query', [
                'query' => $query,
                'time' => $time->format(self::DATETIME_FORMAT),
                'timeout' => $timeout,
            ])
        );
    }
}