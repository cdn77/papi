<?php

declare (strict_types=1);

namespace PApi\Response;

class FlagsDataResponse extends Response
{
    /** @var FlagsData */
    protected $data;

    public function getData() : FlagsData
    {
        return $this->data;
    }
}
