<?php

declare (strict_types=1);

namespace PApi\Response;

class ResponseData
{
    public const RESULT_TYPE_MATRIX = 'matrix';
    public const RESULT_TYPE_VECTOR = 'vector';
    public const RESULT_TYPE_SCALAR = 'scalar';
    public const RESULT_TYPE_STRING = 'string';

    /** @var string */
    protected $resultType;

    /** @var MetricResult[] */
    protected $result;

    /** @var Target[] */
    protected $activeTargets;

    /** @var AlertManager[] */
    protected $activeAlertmanagers;

    public function getResultType() : string
    {
        return $this->resultType;
    }

    /**
     * @return MetricResult[]
     */
    public function getResult() : array
    {
        return $this->result;
    }

    /**
     * @return Target[]
     */
    public function getActiveTargets() : array
    {
        return $this->activeTargets;
    }

    /** @return AlertManager[] */
    public function getActiveAlertmanagers() : array
    {
        return $this->activeAlertmanagers;
    }
}
