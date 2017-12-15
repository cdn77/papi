<?php

declare (strict_types=1);

namespace PApi\Response;

class Target
{
    /** @var string[] */
    protected $discoveredLabels;

    /** @var string[] */
    protected $labels;

    /** @var string */
    protected $scrapeUrl;

    /** @var \DateTimeImmutable */
    protected $lastError;

    /** @var \DateTimeImmutable */
    protected $lastScrape;

    /** @var string */
    protected $health;

    /**
     * @return string[]
     */
    public function getDiscoveredLabels() : array
    {
        return $this->discoveredLabels;
    }

    /**
     * @return string[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }

    public function getScrapeUrl() : string
    {
        return $this->scrapeUrl;
    }

    public function getLastError() : \DateTimeImmutable
    {
        return $this->lastError;
    }

    public function getLastScrape() : \DateTimeImmutable
    {
        return $this->lastScrape;
    }

    public function getHealth() : string
    {
        return $this->health;
    }
}
