<?php

declare (strict_types=1);

namespace PApi\Response;

class Response
{
    public const STATUS_SUCCESS = 'success';
    public const STATUS_ERROR = 'error';

    /** @var string */
    protected $status;

    /** @var string */
    protected $error;

    /** @var string */
    protected $errorType;

    public function getStatus() : string
    {
        return $this->status;
    }

    public function getError() : string
    {
        return $this->error;
    }

    public function getErrorType() : string
    {
        return $this->errorType;
    }
}
