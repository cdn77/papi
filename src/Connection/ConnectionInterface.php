<?php

declare (strict_types=1);

namespace PApi\Connection;

interface ConnectionInterface
{
    /**
     * @param mixed[] $config
     */
    public function create(array $config) : self;

    /**
     * @param mixed[] $query
     */
    public function execute(string $endPoint, array $query = []) : string;
}
