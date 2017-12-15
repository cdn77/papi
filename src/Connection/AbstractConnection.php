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
        $this->connect();
    }

    abstract protected function getBaseUri() : string;

    abstract protected function connect() : void;
}
