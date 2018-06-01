<?php

declare (strict_types=1);

namespace PApi\Response;

use Symfony\Component\Yaml\Yaml;

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

    /** @var Target[] */
    protected $droppedTargets;

    /** @var AlertManager[] */
    protected $activeAlertmanagers;

    /** @var AlertManager[] */
    protected $droppedAlertmanagers;

    /** @var string */
    protected $name;

    /** @var string */
    protected $yaml;

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

    /**
     * @return Target[]
     */
    public function getDroppedTargets() : array
    {
        return $this->droppedTargets;
    }

    /**
     * @return AlertManager[]
     */
    public function getActiveAlertmanagers() : array
    {
        return $this->activeAlertmanagers;
    }

    /**
     * @return AlertManager[]
     */
    public function getDroppedAlertmanagers() : array
    {
        return $this->droppedAlertmanagers;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getYaml() : ?string
    {
        return $this->yaml;
    }

    /**
     * @return mixed[]
     */
    public function getParsedYaml(int $flags = 0) : array
    {
        return Yaml::parse(
            (string) $this->getYaml(),
            $flags
        );
    }
}
