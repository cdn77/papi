# PApi - PHP Api client library for [Prometheus](https://github.com/prometheus/prometheus)
[![Build Status](https://img.shields.io/travis/cdn77/papi.svg?style=flat-square)](https://travis-ci.org/cdn77/papi)

Targets to provide simple means for obtaining data from Prometheus API.

Stable for [Prometheus 1.x and <= v2.1 api spec](https://prometheus.io/docs/prometheus/2.1/querying/api/)
NOTICE: some endpoints are only available in newer versions of Prometheus. For detailed list see [table of available calls](#available-calls) below.

## Instalation
Use composer to add PApi as dependency:

    $ composer install cdn77/papi

## Usage

### Create a client

    <?php
    use PApi\Client;
    
    require __DIR__ . '/vendor/autoload.php';
    
    $client = new Client([
        'host' => 'my-prometheus.com',
    ]);
    
#### Available options

| Name              | Default value         | Description                            |
| ----------------- | --------------------- | -------------------------------------- |  
| scheme            | http                  | Host scheme                            |
| host              | localhost             | Host address                           |
| port              | 9090                  | Host port                              |
| path              | /api/v1/              | Path to base API endpoint              |
| timeout           | 30                    | Timeout for requests                   |
| username          | `null`                | HTTP Auth username                     |
| password          | `null`                | HTTP Auth password                     |
| connectionHeaders | `[]`                  | Connection headers                     |
| connectionType    | CurlConnection::class | Class to use for connection. See below |

#### Available connection classes
- `CurlConnection` - pure php curl implementation. Used by default.
- `GuzzleConnection` - using [guzzle](https://github.com/guzzle/guzzle) 6.3+ library.
    
### Available calls
PApi currently has methods for all available endpoints provided by Prometheus.

| Call                  | Code                                                                                                   | Prometheus compatibility | Official doc                                                                                     |
| --------------------- | ------------------------------------------------------------------------------------------------------ | ------------------------ | ------------------------------------------------------------------------------------------------ |
| Query                 | `$client->getQuery('up', new \DateTimeImmutable('now');`                                               | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#instant-queries)                  |
| QueryRange            | `$client->getQueryRange('up', new \DateTimeImmutable('today'), new \DateTimeImmutable('now'), '12h');` | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#range-queries)                    |
| Series                | `$client->getSeries(['up'], new \DateTimeImmutable('-1 minute'), new \DateTimeImmutable('now');`      | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#finding-series-by-label-matchers) |
| Label Values          | `$client->getLabelValues('job');`                                                                      | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#querying-label-values)            |
| Targets (active only) | `$client->getTargets();`                                                                               | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#targets)                          |
| Alert Managers        | `$client->getAlertManagers();`                                                                         | >=1.0                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#alertmanagers)                    |
| Create snapshot       | `$client->createSnapshot();`                                                                           | >=2.1                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#snapshot)                         |
| Delete series         | `$client->deleteSeries(['up'], new DateTimeImmutable('today'), new DateTimeImmutable('now');`         | >=2.1                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#delete-series)                    |
| Clean tombstones      | `$client->cleanTombstones();`                                                                          | >=2.1                    | [doc](https://prometheus.io/docs/prometheus/2.1/querying/api/#clean-tombstones)                 |
