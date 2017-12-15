<?php

declare (strict_types=1);

namespace PApi\Response;

class AlertManager
{
    /** @var string */
    protected $url;

    public function getUrl() : string
    {
        return $this->url;
    }
}
