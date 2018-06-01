<?php

declare (strict_types=1);

namespace PApi\Connection;

interface ConnectionInterface
{
    /**
     * @param mixed[] $config
     */
    public function __construct(array $config);

    /**
     * @param mixed[] $config
     */
    public function create(array $config) : self;

    /**
     * @param mixed[] $query
     */
    public function executeGet(string $endPoint, array $query = []) : string;

    /**
     * @param mixed[] $query
     */
    public function executePost(string $endPoint, array $query = []) : string;
}
