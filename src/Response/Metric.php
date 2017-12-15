<?php

declare (strict_types=1);

namespace PApi\Response;

use PApi\Client;
use Skrz\Meta\PHP\PhpArrayOffset;

class Metric
{
    /**
     * @PhpArrayOffset("0", group="json:")
     *
     * @var float
     */
    protected $time;

    /**
     * @PhpArrayOffset("1", group="json:")
     *
     * @var string|int|float
     */
    protected $value;

    public function getTime() : float
    {
        return $this->time;
    }

    /**
     * @return float|int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    public function getTimeAsObject() : \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromFormat(
            Client::DATETIME_FORMAT,
            (string) sprintf('%.3f', $this->getTime())
        );
    }
}
