<?php

declare (strict_types=1);

namespace PApi\Response;

use Skrz\Meta\PHP\PhpArrayOffset;

class FlagsData
{
    /**
     * @PhpArrayOffset("alertmanager.notification-queue-capacity", group="json:")
     * @var string
     */
    protected $alertmanagerNotificationQueueCapacity;

    /**
     * @PhpArrayOffset("alertmanager.timeout", group="json:")
     * @var string
     */
    protected $alertmanagerTimeout;

    /**
     * @PhpArrayOffset("config.file", group="json:")
     * @var string
     */
    protected $configFile;

    /**
     * @PhpArrayOffset("log.level", group="json:")
     * @var string
     */
    protected $logLevel;

    /**
     * @PhpArrayOffset("query.lookback-delta", group="json:")
     * @var string
     */
    protected $queryLookbackDelta;

    /**
     * @PhpArrayOffset("query.max-concurrency", group="json:")
     * @var string
     */
    protected $queryMaxConcurrency;

    /**
     * @PhpArrayOffset("query.timeout", group="json:")
     * @var string
     */
    protected $queryTimeout;

    /**
     * @PhpArrayOffset("storage.tsdb.max-block-duration", group="json:")
     * @var string
     */
    protected $storageTsdbMaxBlockDuration;

    /**
     * @PhpArrayOffset("storage.tsdb.min-block-duration", group="json:")
     * @var string
     */
    protected $storageTsdbMinBlockDuration;

    /**
     * @PhpArrayOffset("storage.tsdb.path", group="json:")
     * @var string
     */
    protected $storageTsdbPath;

    /**
     * @PhpArrayOffset("storage.tsdb.retention", group="json:")
     * @var string
     */
    protected $storageTsdbRetention;

    /**
     * @PhpArrayOffset("storage.tsdb.use-lockfile", group="json:")
     * @var string
     */
    protected $storageTsdbUseLockfile;

    /**
     * @PhpArrayOffset("web.console.libraries", group="json:")
     * @var string
     */
    protected $webConsoleLibraries;

    /**
     * @PhpArrayOffset("web.console.templates", group="json:")
     * @var string
     */
    protected $webConsoleTemplates;

    /**
     * @PhpArrayOffset("web.enable-admin-api", group="json:")
     * @var string
     */
    protected $webEnableAdminApi;

    /**
     * @PhpArrayOffset("web.enable-lifecycle", group="json:")
     * @var string
     */
    protected $webEnableLifecycle;

    /**
     * @PhpArrayOffset("web.external-url", group="json:")
     * @var string
     */
    protected $webExternalUrl;

    /**
     * @PhpArrayOffset("web.listen-address", group="json:")
     * @var string
     */
    protected $webListenAddress;

    /**
     * @PhpArrayOffset("web.local-assets", group="json:")
     * @var string
     */
    protected $webLocalAssets;

    /**
     * @PhpArrayOffset("web.max-connections", group="json:")
     * @var string
     */
    protected $webMaxConnections;

    /**
     * @PhpArrayOffset("web.read-timeout", group="json:")
     * @var string
     */
    protected $webReadTimeout;

    /**
     * @PhpArrayOffset("web.route-prefix", group="json:")
     * @var string
     */
    protected $webRoutePrefix;

    /**
     * @PhpArrayOffset("web.user-assets", group="json:")
     * @var string
     */
    protected $webUserAssets;

    public function getAlertmanagerNotificationQueueCapacity() : string
    {
        return $this->alertmanagerNotificationQueueCapacity;
    }

    public function getAlertmanagerTimeout() : string
    {
        return $this->alertmanagerTimeout;
    }

    public function getConfigFile() : string
    {
        return $this->configFile;
    }

    public function getLogLevel() : string
    {
        return $this->logLevel;
    }

    public function getQueryLookbackDelta() : string
    {
        return $this->queryLookbackDelta;
    }

    public function getQueryMaxConcurrency() : string
    {
        return $this->queryMaxConcurrency;
    }

    public function getQueryTimeout() : string
    {
        return $this->queryTimeout;
    }

    public function getStorageTsdbMaxBlockDuration() : string
    {
        return $this->storageTsdbMaxBlockDuration;
    }

    public function getStorageTsdbMinBlockDuration() : string
    {
        return $this->storageTsdbMinBlockDuration;
    }

    public function getStorageTsdbPath() : string
    {
        return $this->storageTsdbPath;
    }

    public function getStorageTsdbRetention() : string
    {
        return $this->storageTsdbRetention;
    }

    public function getStorageTsdbUseLockfile() : string
    {
        return $this->storageTsdbUseLockfile;
    }

    public function getWebConsoleLibraries() : string
    {
        return $this->webConsoleLibraries;
    }

    public function getWebConsoleTemplates() : string
    {
        return $this->webConsoleTemplates;
    }

    public function getWebEnableAdminApi() : string
    {
        return $this->webEnableAdminApi;
    }

    public function getWebEnableLifecycle() : string
    {
        return $this->webEnableLifecycle;
    }

    public function getWebExternalUrl() : string
    {
        return $this->webExternalUrl;
    }

    public function getWebListenAddress() : string
    {
        return $this->webListenAddress;
    }

    public function getWebLocalAssets() : string
    {
        return $this->webLocalAssets;
    }

    public function getWebMaxConnections() : string
    {
        return $this->webMaxConnections;
    }

    public function getWebReadTimeout() : string
    {
        return $this->webReadTimeout;
    }

    public function getWebRoutePrefix() : string
    {
        return $this->webRoutePrefix;
    }

    public function getWebUserAssets() : string
    {
        return $this->webUserAssets;
    }
}
