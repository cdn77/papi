<?php

declare (strict_types=1);

namespace PApi;

use PApi\Response\FlagsData;
use PApi\Response\Meta\ArrayValuesResponseMeta;
use PApi\Response\Meta\DataResponseMeta;
use PApi\Response\Meta\FlagsDataResponseMeta;
use PApi\Response\Metric;
use PApi\Response\Response;
use PApi\Response\ResponseData;
use PApi\Response\Target;
use PHPUnit\Framework\Constraint\IsType;
use PHPUnit\Framework\TestCase;

class ResponseTranslationTest extends TestCase
{
    public function testAlertManagersResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/alertmanagersResponse.json'));
        $activeAlertmanagers = $response->getData()->getActiveAlertmanagers();
        $droppedAlertmanagers = $response->getData()->getDroppedAlertmanagers();

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertCount(1, $activeAlertmanagers);
        $this->assertCount(1, $droppedAlertmanagers);
        $this->assertSame('http://127.0.0.1:9090/api/v1/alerts', $activeAlertmanagers[0]->getUrl());
        $this->assertSame('http://127.0.0.1:9093/api/v1/alerts', $droppedAlertmanagers[0]->getUrl());
    }

    public function testLabelValuesResponse() : void
    {
        $response = ArrayValuesResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/labelValuesResponse.json'));

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInternalType(IsType::TYPE_ARRAY, $response->getData());
        $this->assertEquals(
            [
                'node',
                'prometheus',
            ],
            $response->getData()
        );
    }

    public function testMatrixResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/matrixResponse.json'));
        $metricData = $response->getData()->getResult()[0];
        $metric = $metricData->getValues()[0];

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertEquals(ResponseData::RESULT_TYPE_MATRIX, $response->getData()->getResultType());
        $this->assertInternalType(IsType::TYPE_ARRAY, $metricData->getValues());
        $this->assertArrayHasKey('__name__', $metricData->getMetric());
        $this->assertEquals('up', $metricData->getMetric()['__name__']);
        $this->assertInstanceOf(Metric::class, $metric);
        $this->assertInstanceOf(\DateTimeImmutable::class, $metric->getTimeAsObject());
    }

    public function testSeriesResponse() : void
    {
        $response = ArrayValuesResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/seriesResponse.json'));
        /** @var string[] $series */
        $series = $response->getData()[0];

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInternalType(IsType::TYPE_ARRAY, $response->getData());
        $this->assertArrayHasKey('__name__', $series);
        $this->assertEquals('up', $series['__name__']);
    }

    public function testTargetsResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/targetsResponse.json'));
        $activeTarget = $response->getData()->getActiveTargets()[0];
        $droppedTarget = $response->getData()->getDroppedTargets()[0];

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertNotEmpty($activeTarget->getDiscoveredLabels());
        $this->assertNotEmpty($activeTarget->getLabels());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertInstanceOf(Target::class, $activeTarget);
        $this->assertInstanceOf(Target::class, $droppedTarget);
        $this->assertNotEmpty($droppedTarget->getDiscoveredLabels());
        $this->assertInstanceOf(\DateTimeImmutable::class, $activeTarget->getLastScrape());
    }

    public function testVectorResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/vectorResponse.json'));
        $metricData = $response->getData()->getResult()[0];
        $metric = $metricData->getValue();

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertEquals(ResponseData::RESULT_TYPE_VECTOR, $response->getData()->getResultType());
        $this->assertArrayHasKey('__name__', $metricData->getMetric());
        $this->assertEquals('up', $metricData->getMetric()['__name__']);
        $this->assertInstanceOf(Metric::class, $metric);
        $this->assertInstanceOf(\DateTimeImmutable::class, $metric->getTimeAsObject());
    }

    public function testSnapshotResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/snapshotResponse.json'));

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertEquals('20171210T211224Z-2be650b6d019eb54', $response->getData()->getName());
    }

    public function testConfigResponse() : void
    {
        $response = DataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/configResponse.json'));
        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $yamlArray = $response->getData()->getParsedYaml();
        $this->assertNotEmpty($yamlArray);
        $this->assertEquals('30s', $yamlArray['global']['scrape_interval']);
    }

    public function testFlagsResponse() : void
    {
        $response = FlagsDataResponseMeta::fromJson(file_get_contents(__DIR__ . '/../Fixtures/flagsResponse.json'));
        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(FlagsData::class, $response->getData());
        $this->assertEquals('0.0.0.0:9090', $response->getData()->getWebListenAddress());
    }
}
