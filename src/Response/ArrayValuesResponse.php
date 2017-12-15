<?php

declare (strict_types=1);

namespace PApi\Response;

class ArrayValuesResponse extends Response
{
    /** @var string[] */
    protected $data;

    /**
     * @return string[]|string[][]
     */
    public function getData() : array
    {
        return $this->data;
    }
}
