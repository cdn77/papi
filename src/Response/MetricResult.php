<?php

declare (strict_types=1);

namespace PApi\Response;

class MetricResult
{
    /** @var string[] */
    protected $metric;

    /** @var Metric */
    protected $value;

    /** @var Metric[] */
    protected $values;

    /**
     * @return string[]
     */
    public function getMetric() : array
    {
        return $this->metric;
    }

    public function getValue() : Metric
    {
        return $this->value;
    }

    /**
     * @return Metric[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
}
