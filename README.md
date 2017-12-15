# PApi - PHP Api client library for [Prometheus](https://github.com/prometheus/prometheus)
[![Build Status](https://img.shields.io/travis/cdn77/papi.svg?style=flat-square)](https://travis-ci.org/cdn77/papi)

**Currently in development**

Targets to provide simple means for obtaining data from Prometheus API.

Supports Prometheus 1.x and 2.x `/api/v1` [endpoints](https://prometheus.io/docs/prometheus/latest/querying/api/).

##Instalation
Use composer to add PApi as dependency:

        $ composer install cdn77/papi

##Usage
###Create a client

    <?php
    use PApi\Client;
    
    require __DIR__ . '/vendor/autoload.php';
    
    $client = new Client([
        'host' => 'my-prometheus.com',
    ]);
    
#### available options

| Name              | Default value             |
| ----------------- | -----------------------   |
| scheme            | http                      |
| host              | localhost                 |
| port              | 9090                      |
| path              | /api/v1/                  |
| timeout           | 30                        |
| username          | `null`                    |
| password          | `null`                    |
| connectionHeaders | `[]`                      |
| connectionType    | GuzzleConnection::class   |
    
### Available calls
PApi currently has methods for all available endpoints provided by Prometheus.
#### Query
    $client->getQuery('up', new \DateTimeImmutable('now');
#### QueryRange
    $client->getQueryRange('up', new \DateTimeImmutable('today'), new \DateTimeImmutable('now'), '12h');
#### Series
    $client->getSeries(['up'], new \DateTimeImmutable('-1 minute'), new \DateTimeImmutable('now'));
#### Label Values
    $client->getLabelValues('job');
#### Targets (active only)
    $client->getTargets();
#### Alert Managers
    $client->getAlertManagers();

##Future plans
- add pure curl as default Connection, move guzzle to suggest