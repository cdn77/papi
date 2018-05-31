<?php

declare (strict_types=1);

namespace PApi;

use PApi\Connection\ConnectionInterface;
use PApi\Connection\CurlConnection;
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
        'connectionType' => CurlConnection::class,
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
        return DataResponseMeta::fromJson($this->connection->executeGet('alertmanagers'));
    }

    public function getTargets() : DataResponse
    {
        return DataResponseMeta::fromJson($this->connection->executeGet('targets'));
    }

    public function getLabelValues(string $label) : ArrayValuesResponse
    {
        return ArrayValuesResponseMeta::fromJson(
            $this->connection->executeGet('label/' . urlencode($label) . '/values')
        );
    }

    /**
     * @param string[] $match
     */
    public function getSeries(array $match, \DateTimeInterface $start, \DateTimeInterface $end) : ArrayValuesResponse
    {
        return ArrayValuesResponseMeta::fromJson(
            $this->connection->executeGet('series', [
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
            $this->connection->executeGet('query_range', [
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
            $this->connection->executeGet('query', [
                'query' => $query,
                'time' => $time->format(self::DATETIME_FORMAT),
                'timeout' => $timeout,
            ])
        );
    }

    /**
     * Make sure to enable admin APIs via `--web.enable-admin-api`
     */
    public function createSnapshot() : DataResponse
    {
        return DataResponseMeta::fromJson($this->connection->executePost('admin/tsdb/snapshot'));
    }

    /**
     * Make sure to enable admin APIs via `--web.enable-admin-api`
     * @param string[] $match
     */
    public function deleteSeries(array $match, \DateTimeInterface $start, \DateTimeInterface $end) : bool
    {
        $this->connection->executePost('admin/tsdb/delete_series', [
            'match' => array_values($match),
            'start' => $start->format(self::DATETIME_FORMAT),
            'end' => $end->format(self::DATETIME_FORMAT),
        ]);
        return true;
    }

    /**
     * Make sure to enable admin APIs via `--web.enable-admin-api`
     */
    public function cleanTombstones() : bool
    {
        $this->connection->executePost('admin/tsdb/clean_tombstones');
        return true;
    }
}
