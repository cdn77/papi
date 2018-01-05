<?php

declare (strict_types=1);

namespace PApi\Connection;

abstract class AbstractConnection implements ConnectionInterface
{
    /** @var mixed[] */
    protected $config = [];

    /**
     * @param mixed[] $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    abstract protected function connect() : void;
}
