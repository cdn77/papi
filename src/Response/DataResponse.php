<?php

declare (strict_types=1);

namespace PApi\Response;

class DataResponse extends Response
{
    /** @var ResponseData */
    protected $data;

    public function getData() : ResponseData
    {
        return $this->data;
    }
}
