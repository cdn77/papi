<?php

declare (strict_types=1);

namespace PApi;

use PApi\Response\Meta\ArrayValuesResponseMeta;
use PApi\Response\Meta\DataResponseMeta;
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
        $alertManagers = $response->getData()->getActiveAlertmanagers();

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertCount(1, $alertManagers);
        $this->assertSame('http://127.0.0.1:9090/api/v1/alerts', $alertManagers[0]->getUrl());
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
        $target = $response->getData()->getActiveTargets()[0];

        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
        $this->assertNotEmpty($target->getDiscoveredLabels());
        $this->assertNotEmpty($target->getLabels());
        $this->assertInstanceOf(ResponseData::class, $response->getData());
        $this->assertInstanceOf(Target::class, $target);
        $this->assertInstanceOf(\DateTimeImmutable::class, $target->getLastScrape());
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
}
