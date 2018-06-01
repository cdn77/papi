<?php
namespace PApi\Response\Meta;

use PApi\Response\FlagsData;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\FlagsData
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class FlagsDataMeta extends FlagsData implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\FlagsData';
	const SHORT_NAME = 'FlagsData';
	const ENTITY_NAME = 'flagsData';
	const ALERTMANAGER_NOTIFICATION_QUEUE_CAPACITY = 'alertmanagerNotificationQueueCapacity';
	const ALERTMANAGER_TIMEOUT = 'alertmanagerTimeout';
	const CONFIG_FILE = 'configFile';
	const LOG_LEVEL = 'logLevel';
	const QUERY_LOOKBACK_DELTA = 'queryLookbackDelta';
	const QUERY_MAX_CONCURRENCY = 'queryMaxConcurrency';
	const QUERY_TIMEOUT = 'queryTimeout';
	const STORAGE_TSDB_MAX_BLOCK_DURATION = 'storageTsdbMaxBlockDuration';
	const STORAGE_TSDB_MIN_BLOCK_DURATION = 'storageTsdbMinBlockDuration';
	const STORAGE_TSDB_PATH = 'storageTsdbPath';
	const STORAGE_TSDB_RETENTION = 'storageTsdbRetention';
	const STORAGE_TSDB_USE_LOCKFILE = 'storageTsdbUseLockfile';
	const WEB_CONSOLE_LIBRARIES = 'webConsoleLibraries';
	const WEB_CONSOLE_TEMPLATES = 'webConsoleTemplates';
	const WEB_ENABLE_ADMIN_API = 'webEnableAdminApi';
	const WEB_ENABLE_LIFECYCLE = 'webEnableLifecycle';
	const WEB_EXTERNAL_URL = 'webExternalUrl';
	const WEB_LISTEN_ADDRESS = 'webListenAddress';
	const WEB_LOCAL_ASSETS = 'webLocalAssets';
	const WEB_MAX_CONNECTIONS = 'webMaxConnections';
	const WEB_READ_TIMEOUT = 'webReadTimeout';
	const WEB_ROUTE_PREFIX = 'webRoutePrefix';
	const WEB_USER_ASSETS = 'webUserAssets';

	/** @var FlagsDataMeta */
	private static $instance;

	/**
	 * Mapping from group name to group ID for fromArray() and toArray()
	 *
	 * @var string[]
	 */
	private static $groups = ['' => 1, 'json:' => 2];


	/**
	 * Constructor
	 */
	private function __construct()
	{
		self::$instance = $this; // avoids cyclic dependency stack overflow
	}


	/**
	 * Returns instance of this meta class
	 *
	 * @return FlagsDataMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\FlagsData
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return FlagsData
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new FlagsData();
			case 1:
				return new FlagsData(func_get_arg(0));
			case 2:
				return new FlagsData(func_get_arg(0), func_get_arg(1));
			case 3:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new FlagsData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\FlagsData to default values
	 *
	 *
	 * @param FlagsData $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof FlagsData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\FlagsData.');
		}
		$object->alertmanagerNotificationQueueCapacity = NULL;
		$object->alertmanagerTimeout = NULL;
		$object->configFile = NULL;
		$object->logLevel = NULL;
		$object->queryLookbackDelta = NULL;
		$object->queryMaxConcurrency = NULL;
		$object->queryTimeout = NULL;
		$object->storageTsdbMaxBlockDuration = NULL;
		$object->storageTsdbMinBlockDuration = NULL;
		$object->storageTsdbPath = NULL;
		$object->storageTsdbRetention = NULL;
		$object->storageTsdbUseLockfile = NULL;
		$object->webConsoleLibraries = NULL;
		$object->webConsoleTemplates = NULL;
		$object->webEnableAdminApi = NULL;
		$object->webEnableLifecycle = NULL;
		$object->webExternalUrl = NULL;
		$object->webListenAddress = NULL;
		$object->webLocalAssets = NULL;
		$object->webMaxConnections = NULL;
		$object->webReadTimeout = NULL;
		$object->webRoutePrefix = NULL;
		$object->webUserAssets = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\FlagsData
	 *
	 * @param object $object
	 * @param string|resource $algoOrCtx
	 * @param bool $raw
	 *
	 * @return string|void
	 */
	public static function hash($object, $algoOrCtx = 'md5', $raw = false)
	{
		if (is_string($algoOrCtx)) {
			$ctx = hash_init($algoOrCtx);
		} else {
			$ctx = $algoOrCtx;
		}

		if (isset($object->alertmanagerNotificationQueueCapacity)) {
			hash_update($ctx, 'alertmanagerNotificationQueueCapacity');
			hash_update($ctx, (string)$object->alertmanagerNotificationQueueCapacity);
		}

		if (isset($object->alertmanagerTimeout)) {
			hash_update($ctx, 'alertmanagerTimeout');
			hash_update($ctx, (string)$object->alertmanagerTimeout);
		}

		if (isset($object->configFile)) {
			hash_update($ctx, 'configFile');
			hash_update($ctx, (string)$object->configFile);
		}

		if (isset($object->logLevel)) {
			hash_update($ctx, 'logLevel');
			hash_update($ctx, (string)$object->logLevel);
		}

		if (isset($object->queryLookbackDelta)) {
			hash_update($ctx, 'queryLookbackDelta');
			hash_update($ctx, (string)$object->queryLookbackDelta);
		}

		if (isset($object->queryMaxConcurrency)) {
			hash_update($ctx, 'queryMaxConcurrency');
			hash_update($ctx, (string)$object->queryMaxConcurrency);
		}

		if (isset($object->queryTimeout)) {
			hash_update($ctx, 'queryTimeout');
			hash_update($ctx, (string)$object->queryTimeout);
		}

		if (isset($object->storageTsdbMaxBlockDuration)) {
			hash_update($ctx, 'storageTsdbMaxBlockDuration');
			hash_update($ctx, (string)$object->storageTsdbMaxBlockDuration);
		}

		if (isset($object->storageTsdbMinBlockDuration)) {
			hash_update($ctx, 'storageTsdbMinBlockDuration');
			hash_update($ctx, (string)$object->storageTsdbMinBlockDuration);
		}

		if (isset($object->storageTsdbPath)) {
			hash_update($ctx, 'storageTsdbPath');
			hash_update($ctx, (string)$object->storageTsdbPath);
		}

		if (isset($object->storageTsdbRetention)) {
			hash_update($ctx, 'storageTsdbRetention');
			hash_update($ctx, (string)$object->storageTsdbRetention);
		}

		if (isset($object->storageTsdbUseLockfile)) {
			hash_update($ctx, 'storageTsdbUseLockfile');
			hash_update($ctx, (string)$object->storageTsdbUseLockfile);
		}

		if (isset($object->webConsoleLibraries)) {
			hash_update($ctx, 'webConsoleLibraries');
			hash_update($ctx, (string)$object->webConsoleLibraries);
		}

		if (isset($object->webConsoleTemplates)) {
			hash_update($ctx, 'webConsoleTemplates');
			hash_update($ctx, (string)$object->webConsoleTemplates);
		}

		if (isset($object->webEnableAdminApi)) {
			hash_update($ctx, 'webEnableAdminApi');
			hash_update($ctx, (string)$object->webEnableAdminApi);
		}

		if (isset($object->webEnableLifecycle)) {
			hash_update($ctx, 'webEnableLifecycle');
			hash_update($ctx, (string)$object->webEnableLifecycle);
		}

		if (isset($object->webExternalUrl)) {
			hash_update($ctx, 'webExternalUrl');
			hash_update($ctx, (string)$object->webExternalUrl);
		}

		if (isset($object->webListenAddress)) {
			hash_update($ctx, 'webListenAddress');
			hash_update($ctx, (string)$object->webListenAddress);
		}

		if (isset($object->webLocalAssets)) {
			hash_update($ctx, 'webLocalAssets');
			hash_update($ctx, (string)$object->webLocalAssets);
		}

		if (isset($object->webMaxConnections)) {
			hash_update($ctx, 'webMaxConnections');
			hash_update($ctx, (string)$object->webMaxConnections);
		}

		if (isset($object->webReadTimeout)) {
			hash_update($ctx, 'webReadTimeout');
			hash_update($ctx, (string)$object->webReadTimeout);
		}

		if (isset($object->webRoutePrefix)) {
			hash_update($ctx, 'webRoutePrefix');
			hash_update($ctx, (string)$object->webRoutePrefix);
		}

		if (isset($object->webUserAssets)) {
			hash_update($ctx, 'webUserAssets');
			hash_update($ctx, (string)$object->webUserAssets);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\FlagsData object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param FlagsData $object
	 *
	 * @throws \Exception
	 *
	 * @return FlagsData
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new FlagsData();
		} elseif (!($object instanceof FlagsData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\FlagsData.');
		}

		if (($id & 2) > 0 && isset($input['alertmanager.notification-queue-capacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanager.notification-queue-capacity'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanager.notification-queue-capacity', $input) && $input['alertmanager.notification-queue-capacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}
		if (($id & 1) > 0 && isset($input['alertmanagerNotificationQueueCapacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanagerNotificationQueueCapacity'];
		} elseif (($id & 1) > 0 && array_key_exists('alertmanagerNotificationQueueCapacity', $input) && $input['alertmanagerNotificationQueueCapacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}
		if (($id & 2) > 0 && isset($input['alertmanagerNotificationQueueCapacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanagerNotificationQueueCapacity'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanagerNotificationQueueCapacity', $input) && $input['alertmanagerNotificationQueueCapacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}

		if (($id & 2) > 0 && isset($input['alertmanager.timeout'])) {
			$object->alertmanagerTimeout = $input['alertmanager.timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanager.timeout', $input) && $input['alertmanager.timeout'] === null) {
			$object->alertmanagerTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['alertmanagerTimeout'])) {
			$object->alertmanagerTimeout = $input['alertmanagerTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('alertmanagerTimeout', $input) && $input['alertmanagerTimeout'] === null) {
			$object->alertmanagerTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['alertmanagerTimeout'])) {
			$object->alertmanagerTimeout = $input['alertmanagerTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanagerTimeout', $input) && $input['alertmanagerTimeout'] === null) {
			$object->alertmanagerTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['config.file'])) {
			$object->configFile = $input['config.file'];
		} elseif (($id & 2) > 0 && array_key_exists('config.file', $input) && $input['config.file'] === null) {
			$object->configFile = null;
		}
		if (($id & 1) > 0 && isset($input['configFile'])) {
			$object->configFile = $input['configFile'];
		} elseif (($id & 1) > 0 && array_key_exists('configFile', $input) && $input['configFile'] === null) {
			$object->configFile = null;
		}
		if (($id & 2) > 0 && isset($input['configFile'])) {
			$object->configFile = $input['configFile'];
		} elseif (($id & 2) > 0 && array_key_exists('configFile', $input) && $input['configFile'] === null) {
			$object->configFile = null;
		}

		if (($id & 2) > 0 && isset($input['log.level'])) {
			$object->logLevel = $input['log.level'];
		} elseif (($id & 2) > 0 && array_key_exists('log.level', $input) && $input['log.level'] === null) {
			$object->logLevel = null;
		}
		if (($id & 1) > 0 && isset($input['logLevel'])) {
			$object->logLevel = $input['logLevel'];
		} elseif (($id & 1) > 0 && array_key_exists('logLevel', $input) && $input['logLevel'] === null) {
			$object->logLevel = null;
		}
		if (($id & 2) > 0 && isset($input['logLevel'])) {
			$object->logLevel = $input['logLevel'];
		} elseif (($id & 2) > 0 && array_key_exists('logLevel', $input) && $input['logLevel'] === null) {
			$object->logLevel = null;
		}

		if (($id & 2) > 0 && isset($input['query.lookback-delta'])) {
			$object->queryLookbackDelta = $input['query.lookback-delta'];
		} elseif (($id & 2) > 0 && array_key_exists('query.lookback-delta', $input) && $input['query.lookback-delta'] === null) {
			$object->queryLookbackDelta = null;
		}
		if (($id & 1) > 0 && isset($input['queryLookbackDelta'])) {
			$object->queryLookbackDelta = $input['queryLookbackDelta'];
		} elseif (($id & 1) > 0 && array_key_exists('queryLookbackDelta', $input) && $input['queryLookbackDelta'] === null) {
			$object->queryLookbackDelta = null;
		}
		if (($id & 2) > 0 && isset($input['queryLookbackDelta'])) {
			$object->queryLookbackDelta = $input['queryLookbackDelta'];
		} elseif (($id & 2) > 0 && array_key_exists('queryLookbackDelta', $input) && $input['queryLookbackDelta'] === null) {
			$object->queryLookbackDelta = null;
		}

		if (($id & 2) > 0 && isset($input['query.max-concurrency'])) {
			$object->queryMaxConcurrency = $input['query.max-concurrency'];
		} elseif (($id & 2) > 0 && array_key_exists('query.max-concurrency', $input) && $input['query.max-concurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}
		if (($id & 1) > 0 && isset($input['queryMaxConcurrency'])) {
			$object->queryMaxConcurrency = $input['queryMaxConcurrency'];
		} elseif (($id & 1) > 0 && array_key_exists('queryMaxConcurrency', $input) && $input['queryMaxConcurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}
		if (($id & 2) > 0 && isset($input['queryMaxConcurrency'])) {
			$object->queryMaxConcurrency = $input['queryMaxConcurrency'];
		} elseif (($id & 2) > 0 && array_key_exists('queryMaxConcurrency', $input) && $input['queryMaxConcurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}

		if (($id & 2) > 0 && isset($input['query.timeout'])) {
			$object->queryTimeout = $input['query.timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('query.timeout', $input) && $input['query.timeout'] === null) {
			$object->queryTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['queryTimeout'])) {
			$object->queryTimeout = $input['queryTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('queryTimeout', $input) && $input['queryTimeout'] === null) {
			$object->queryTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['queryTimeout'])) {
			$object->queryTimeout = $input['queryTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('queryTimeout', $input) && $input['queryTimeout'] === null) {
			$object->queryTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.max-block-duration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storage.tsdb.max-block-duration'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.max-block-duration', $input) && $input['storage.tsdb.max-block-duration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbMaxBlockDuration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storageTsdbMaxBlockDuration'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbMaxBlockDuration', $input) && $input['storageTsdbMaxBlockDuration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbMaxBlockDuration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storageTsdbMaxBlockDuration'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbMaxBlockDuration', $input) && $input['storageTsdbMaxBlockDuration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.min-block-duration'])) {
			$object->storageTsdbMinBlockDuration = $input['storage.tsdb.min-block-duration'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.min-block-duration', $input) && $input['storage.tsdb.min-block-duration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbMinBlockDuration'])) {
			$object->storageTsdbMinBlockDuration = $input['storageTsdbMinBlockDuration'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbMinBlockDuration', $input) && $input['storageTsdbMinBlockDuration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbMinBlockDuration'])) {
			$object->storageTsdbMinBlockDuration = $input['storageTsdbMinBlockDuration'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbMinBlockDuration', $input) && $input['storageTsdbMinBlockDuration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.path'])) {
			$object->storageTsdbPath = $input['storage.tsdb.path'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.path', $input) && $input['storage.tsdb.path'] === null) {
			$object->storageTsdbPath = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbPath'])) {
			$object->storageTsdbPath = $input['storageTsdbPath'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbPath', $input) && $input['storageTsdbPath'] === null) {
			$object->storageTsdbPath = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbPath'])) {
			$object->storageTsdbPath = $input['storageTsdbPath'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbPath', $input) && $input['storageTsdbPath'] === null) {
			$object->storageTsdbPath = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.retention'])) {
			$object->storageTsdbRetention = $input['storage.tsdb.retention'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.retention', $input) && $input['storage.tsdb.retention'] === null) {
			$object->storageTsdbRetention = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbRetention'])) {
			$object->storageTsdbRetention = $input['storageTsdbRetention'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbRetention', $input) && $input['storageTsdbRetention'] === null) {
			$object->storageTsdbRetention = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbRetention'])) {
			$object->storageTsdbRetention = $input['storageTsdbRetention'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbRetention', $input) && $input['storageTsdbRetention'] === null) {
			$object->storageTsdbRetention = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.use-lockfile'])) {
			$object->storageTsdbUseLockfile = $input['storage.tsdb.use-lockfile'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.use-lockfile', $input) && $input['storage.tsdb.use-lockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbUseLockfile'])) {
			$object->storageTsdbUseLockfile = $input['storageTsdbUseLockfile'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbUseLockfile', $input) && $input['storageTsdbUseLockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbUseLockfile'])) {
			$object->storageTsdbUseLockfile = $input['storageTsdbUseLockfile'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbUseLockfile', $input) && $input['storageTsdbUseLockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}

		if (($id & 2) > 0 && isset($input['web.console.libraries'])) {
			$object->webConsoleLibraries = $input['web.console.libraries'];
		} elseif (($id & 2) > 0 && array_key_exists('web.console.libraries', $input) && $input['web.console.libraries'] === null) {
			$object->webConsoleLibraries = null;
		}
		if (($id & 1) > 0 && isset($input['webConsoleLibraries'])) {
			$object->webConsoleLibraries = $input['webConsoleLibraries'];
		} elseif (($id & 1) > 0 && array_key_exists('webConsoleLibraries', $input) && $input['webConsoleLibraries'] === null) {
			$object->webConsoleLibraries = null;
		}
		if (($id & 2) > 0 && isset($input['webConsoleLibraries'])) {
			$object->webConsoleLibraries = $input['webConsoleLibraries'];
		} elseif (($id & 2) > 0 && array_key_exists('webConsoleLibraries', $input) && $input['webConsoleLibraries'] === null) {
			$object->webConsoleLibraries = null;
		}

		if (($id & 2) > 0 && isset($input['web.console.templates'])) {
			$object->webConsoleTemplates = $input['web.console.templates'];
		} elseif (($id & 2) > 0 && array_key_exists('web.console.templates', $input) && $input['web.console.templates'] === null) {
			$object->webConsoleTemplates = null;
		}
		if (($id & 1) > 0 && isset($input['webConsoleTemplates'])) {
			$object->webConsoleTemplates = $input['webConsoleTemplates'];
		} elseif (($id & 1) > 0 && array_key_exists('webConsoleTemplates', $input) && $input['webConsoleTemplates'] === null) {
			$object->webConsoleTemplates = null;
		}
		if (($id & 2) > 0 && isset($input['webConsoleTemplates'])) {
			$object->webConsoleTemplates = $input['webConsoleTemplates'];
		} elseif (($id & 2) > 0 && array_key_exists('webConsoleTemplates', $input) && $input['webConsoleTemplates'] === null) {
			$object->webConsoleTemplates = null;
		}

		if (($id & 2) > 0 && isset($input['web.enable-admin-api'])) {
			$object->webEnableAdminApi = $input['web.enable-admin-api'];
		} elseif (($id & 2) > 0 && array_key_exists('web.enable-admin-api', $input) && $input['web.enable-admin-api'] === null) {
			$object->webEnableAdminApi = null;
		}
		if (($id & 1) > 0 && isset($input['webEnableAdminApi'])) {
			$object->webEnableAdminApi = $input['webEnableAdminApi'];
		} elseif (($id & 1) > 0 && array_key_exists('webEnableAdminApi', $input) && $input['webEnableAdminApi'] === null) {
			$object->webEnableAdminApi = null;
		}
		if (($id & 2) > 0 && isset($input['webEnableAdminApi'])) {
			$object->webEnableAdminApi = $input['webEnableAdminApi'];
		} elseif (($id & 2) > 0 && array_key_exists('webEnableAdminApi', $input) && $input['webEnableAdminApi'] === null) {
			$object->webEnableAdminApi = null;
		}

		if (($id & 2) > 0 && isset($input['web.enable-lifecycle'])) {
			$object->webEnableLifecycle = $input['web.enable-lifecycle'];
		} elseif (($id & 2) > 0 && array_key_exists('web.enable-lifecycle', $input) && $input['web.enable-lifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}
		if (($id & 1) > 0 && isset($input['webEnableLifecycle'])) {
			$object->webEnableLifecycle = $input['webEnableLifecycle'];
		} elseif (($id & 1) > 0 && array_key_exists('webEnableLifecycle', $input) && $input['webEnableLifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}
		if (($id & 2) > 0 && isset($input['webEnableLifecycle'])) {
			$object->webEnableLifecycle = $input['webEnableLifecycle'];
		} elseif (($id & 2) > 0 && array_key_exists('webEnableLifecycle', $input) && $input['webEnableLifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}

		if (($id & 2) > 0 && isset($input['web.external-url'])) {
			$object->webExternalUrl = $input['web.external-url'];
		} elseif (($id & 2) > 0 && array_key_exists('web.external-url', $input) && $input['web.external-url'] === null) {
			$object->webExternalUrl = null;
		}
		if (($id & 1) > 0 && isset($input['webExternalUrl'])) {
			$object->webExternalUrl = $input['webExternalUrl'];
		} elseif (($id & 1) > 0 && array_key_exists('webExternalUrl', $input) && $input['webExternalUrl'] === null) {
			$object->webExternalUrl = null;
		}
		if (($id & 2) > 0 && isset($input['webExternalUrl'])) {
			$object->webExternalUrl = $input['webExternalUrl'];
		} elseif (($id & 2) > 0 && array_key_exists('webExternalUrl', $input) && $input['webExternalUrl'] === null) {
			$object->webExternalUrl = null;
		}

		if (($id & 2) > 0 && isset($input['web.listen-address'])) {
			$object->webListenAddress = $input['web.listen-address'];
		} elseif (($id & 2) > 0 && array_key_exists('web.listen-address', $input) && $input['web.listen-address'] === null) {
			$object->webListenAddress = null;
		}
		if (($id & 1) > 0 && isset($input['webListenAddress'])) {
			$object->webListenAddress = $input['webListenAddress'];
		} elseif (($id & 1) > 0 && array_key_exists('webListenAddress', $input) && $input['webListenAddress'] === null) {
			$object->webListenAddress = null;
		}
		if (($id & 2) > 0 && isset($input['webListenAddress'])) {
			$object->webListenAddress = $input['webListenAddress'];
		} elseif (($id & 2) > 0 && array_key_exists('webListenAddress', $input) && $input['webListenAddress'] === null) {
			$object->webListenAddress = null;
		}

		if (($id & 2) > 0 && isset($input['web.local-assets'])) {
			$object->webLocalAssets = $input['web.local-assets'];
		} elseif (($id & 2) > 0 && array_key_exists('web.local-assets', $input) && $input['web.local-assets'] === null) {
			$object->webLocalAssets = null;
		}
		if (($id & 1) > 0 && isset($input['webLocalAssets'])) {
			$object->webLocalAssets = $input['webLocalAssets'];
		} elseif (($id & 1) > 0 && array_key_exists('webLocalAssets', $input) && $input['webLocalAssets'] === null) {
			$object->webLocalAssets = null;
		}
		if (($id & 2) > 0 && isset($input['webLocalAssets'])) {
			$object->webLocalAssets = $input['webLocalAssets'];
		} elseif (($id & 2) > 0 && array_key_exists('webLocalAssets', $input) && $input['webLocalAssets'] === null) {
			$object->webLocalAssets = null;
		}

		if (($id & 2) > 0 && isset($input['web.max-connections'])) {
			$object->webMaxConnections = $input['web.max-connections'];
		} elseif (($id & 2) > 0 && array_key_exists('web.max-connections', $input) && $input['web.max-connections'] === null) {
			$object->webMaxConnections = null;
		}
		if (($id & 1) > 0 && isset($input['webMaxConnections'])) {
			$object->webMaxConnections = $input['webMaxConnections'];
		} elseif (($id & 1) > 0 && array_key_exists('webMaxConnections', $input) && $input['webMaxConnections'] === null) {
			$object->webMaxConnections = null;
		}
		if (($id & 2) > 0 && isset($input['webMaxConnections'])) {
			$object->webMaxConnections = $input['webMaxConnections'];
		} elseif (($id & 2) > 0 && array_key_exists('webMaxConnections', $input) && $input['webMaxConnections'] === null) {
			$object->webMaxConnections = null;
		}

		if (($id & 2) > 0 && isset($input['web.read-timeout'])) {
			$object->webReadTimeout = $input['web.read-timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('web.read-timeout', $input) && $input['web.read-timeout'] === null) {
			$object->webReadTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['webReadTimeout'])) {
			$object->webReadTimeout = $input['webReadTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('webReadTimeout', $input) && $input['webReadTimeout'] === null) {
			$object->webReadTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['webReadTimeout'])) {
			$object->webReadTimeout = $input['webReadTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('webReadTimeout', $input) && $input['webReadTimeout'] === null) {
			$object->webReadTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['web.route-prefix'])) {
			$object->webRoutePrefix = $input['web.route-prefix'];
		} elseif (($id & 2) > 0 && array_key_exists('web.route-prefix', $input) && $input['web.route-prefix'] === null) {
			$object->webRoutePrefix = null;
		}
		if (($id & 1) > 0 && isset($input['webRoutePrefix'])) {
			$object->webRoutePrefix = $input['webRoutePrefix'];
		} elseif (($id & 1) > 0 && array_key_exists('webRoutePrefix', $input) && $input['webRoutePrefix'] === null) {
			$object->webRoutePrefix = null;
		}
		if (($id & 2) > 0 && isset($input['webRoutePrefix'])) {
			$object->webRoutePrefix = $input['webRoutePrefix'];
		} elseif (($id & 2) > 0 && array_key_exists('webRoutePrefix', $input) && $input['webRoutePrefix'] === null) {
			$object->webRoutePrefix = null;
		}

		if (($id & 2) > 0 && isset($input['web.user-assets'])) {
			$object->webUserAssets = $input['web.user-assets'];
		} elseif (($id & 2) > 0 && array_key_exists('web.user-assets', $input) && $input['web.user-assets'] === null) {
			$object->webUserAssets = null;
		}
		if (($id & 1) > 0 && isset($input['webUserAssets'])) {
			$object->webUserAssets = $input['webUserAssets'];
		} elseif (($id & 1) > 0 && array_key_exists('webUserAssets', $input) && $input['webUserAssets'] === null) {
			$object->webUserAssets = null;
		}
		if (($id & 2) > 0 && isset($input['webUserAssets'])) {
			$object->webUserAssets = $input['webUserAssets'];
		} elseif (($id & 2) > 0 && array_key_exists('webUserAssets', $input) && $input['webUserAssets'] === null) {
			$object->webUserAssets = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\FlagsData to array
	 *
	 * @param FlagsData $object
	 * @param string $group
	 * @param array $filter
	 *
	 * @throws \Exception
	 *
	 * @return array
	 */
	public static function toArray($object, $group = null, $filter = null)
	{
		if ($object === null) {
			return null;
		}
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof FlagsData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\FlagsData.');
		}

		if (Stack::$objects === null) {
			Stack::$objects = new \SplObjectStorage();
		}

		if (Stack::$objects->contains($object)) {
			return null;
		}

		Stack::$objects->attach($object);

		try {
			$output = array();

			if (($id & 2) > 0 && ($filter === null || isset($filter['alertmanager.notification-queue-capacity']))) {
				$output['alertmanager.notification-queue-capacity'] = $object->alertmanagerNotificationQueueCapacity;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['alertmanagerNotificationQueueCapacity']))) {
				$output['alertmanagerNotificationQueueCapacity'] = $object->alertmanagerNotificationQueueCapacity;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['alertmanager.timeout']))) {
				$output['alertmanager.timeout'] = $object->alertmanagerTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['alertmanagerTimeout']))) {
				$output['alertmanagerTimeout'] = $object->alertmanagerTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['config.file']))) {
				$output['config.file'] = $object->configFile;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['configFile']))) {
				$output['configFile'] = $object->configFile;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['log.level']))) {
				$output['log.level'] = $object->logLevel;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['logLevel']))) {
				$output['logLevel'] = $object->logLevel;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.lookback-delta']))) {
				$output['query.lookback-delta'] = $object->queryLookbackDelta;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryLookbackDelta']))) {
				$output['queryLookbackDelta'] = $object->queryLookbackDelta;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.max-concurrency']))) {
				$output['query.max-concurrency'] = $object->queryMaxConcurrency;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryMaxConcurrency']))) {
				$output['queryMaxConcurrency'] = $object->queryMaxConcurrency;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.timeout']))) {
				$output['query.timeout'] = $object->queryTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryTimeout']))) {
				$output['queryTimeout'] = $object->queryTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.max-block-duration']))) {
				$output['storage.tsdb.max-block-duration'] = $object->storageTsdbMaxBlockDuration;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbMaxBlockDuration']))) {
				$output['storageTsdbMaxBlockDuration'] = $object->storageTsdbMaxBlockDuration;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.min-block-duration']))) {
				$output['storage.tsdb.min-block-duration'] = $object->storageTsdbMinBlockDuration;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbMinBlockDuration']))) {
				$output['storageTsdbMinBlockDuration'] = $object->storageTsdbMinBlockDuration;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.path']))) {
				$output['storage.tsdb.path'] = $object->storageTsdbPath;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbPath']))) {
				$output['storageTsdbPath'] = $object->storageTsdbPath;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.retention']))) {
				$output['storage.tsdb.retention'] = $object->storageTsdbRetention;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbRetention']))) {
				$output['storageTsdbRetention'] = $object->storageTsdbRetention;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.use-lockfile']))) {
				$output['storage.tsdb.use-lockfile'] = $object->storageTsdbUseLockfile;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbUseLockfile']))) {
				$output['storageTsdbUseLockfile'] = $object->storageTsdbUseLockfile;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.console.libraries']))) {
				$output['web.console.libraries'] = $object->webConsoleLibraries;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webConsoleLibraries']))) {
				$output['webConsoleLibraries'] = $object->webConsoleLibraries;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.console.templates']))) {
				$output['web.console.templates'] = $object->webConsoleTemplates;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webConsoleTemplates']))) {
				$output['webConsoleTemplates'] = $object->webConsoleTemplates;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.enable-admin-api']))) {
				$output['web.enable-admin-api'] = $object->webEnableAdminApi;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webEnableAdminApi']))) {
				$output['webEnableAdminApi'] = $object->webEnableAdminApi;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.enable-lifecycle']))) {
				$output['web.enable-lifecycle'] = $object->webEnableLifecycle;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webEnableLifecycle']))) {
				$output['webEnableLifecycle'] = $object->webEnableLifecycle;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.external-url']))) {
				$output['web.external-url'] = $object->webExternalUrl;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webExternalUrl']))) {
				$output['webExternalUrl'] = $object->webExternalUrl;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.listen-address']))) {
				$output['web.listen-address'] = $object->webListenAddress;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webListenAddress']))) {
				$output['webListenAddress'] = $object->webListenAddress;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.local-assets']))) {
				$output['web.local-assets'] = $object->webLocalAssets;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webLocalAssets']))) {
				$output['webLocalAssets'] = $object->webLocalAssets;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.max-connections']))) {
				$output['web.max-connections'] = $object->webMaxConnections;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webMaxConnections']))) {
				$output['webMaxConnections'] = $object->webMaxConnections;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.read-timeout']))) {
				$output['web.read-timeout'] = $object->webReadTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webReadTimeout']))) {
				$output['webReadTimeout'] = $object->webReadTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.route-prefix']))) {
				$output['web.route-prefix'] = $object->webRoutePrefix;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webRoutePrefix']))) {
				$output['webRoutePrefix'] = $object->webRoutePrefix;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.user-assets']))) {
				$output['web.user-assets'] = $object->webUserAssets;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webUserAssets']))) {
				$output['webUserAssets'] = $object->webUserAssets;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\FlagsData object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param FlagsData $object
	 *
	 * @throws \Exception
	 *
	 * @return FlagsData
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new FlagsData();
		} elseif (!($object instanceof FlagsData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\FlagsData.');
		}

		if (($id & 2) > 0 && isset($input['alertmanager.notification-queue-capacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanager.notification-queue-capacity'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanager.notification-queue-capacity', $input) && $input['alertmanager.notification-queue-capacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}
		if (($id & 1) > 0 && isset($input['alertmanagerNotificationQueueCapacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanagerNotificationQueueCapacity'];
		} elseif (($id & 1) > 0 && array_key_exists('alertmanagerNotificationQueueCapacity', $input) && $input['alertmanagerNotificationQueueCapacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}
		if (($id & 2) > 0 && isset($input['alertmanagerNotificationQueueCapacity'])) {
			$object->alertmanagerNotificationQueueCapacity = $input['alertmanagerNotificationQueueCapacity'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanagerNotificationQueueCapacity', $input) && $input['alertmanagerNotificationQueueCapacity'] === null) {
			$object->alertmanagerNotificationQueueCapacity = null;
		}

		if (($id & 2) > 0 && isset($input['alertmanager.timeout'])) {
			$object->alertmanagerTimeout = $input['alertmanager.timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanager.timeout', $input) && $input['alertmanager.timeout'] === null) {
			$object->alertmanagerTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['alertmanagerTimeout'])) {
			$object->alertmanagerTimeout = $input['alertmanagerTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('alertmanagerTimeout', $input) && $input['alertmanagerTimeout'] === null) {
			$object->alertmanagerTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['alertmanagerTimeout'])) {
			$object->alertmanagerTimeout = $input['alertmanagerTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('alertmanagerTimeout', $input) && $input['alertmanagerTimeout'] === null) {
			$object->alertmanagerTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['config.file'])) {
			$object->configFile = $input['config.file'];
		} elseif (($id & 2) > 0 && array_key_exists('config.file', $input) && $input['config.file'] === null) {
			$object->configFile = null;
		}
		if (($id & 1) > 0 && isset($input['configFile'])) {
			$object->configFile = $input['configFile'];
		} elseif (($id & 1) > 0 && array_key_exists('configFile', $input) && $input['configFile'] === null) {
			$object->configFile = null;
		}
		if (($id & 2) > 0 && isset($input['configFile'])) {
			$object->configFile = $input['configFile'];
		} elseif (($id & 2) > 0 && array_key_exists('configFile', $input) && $input['configFile'] === null) {
			$object->configFile = null;
		}

		if (($id & 2) > 0 && isset($input['log.level'])) {
			$object->logLevel = $input['log.level'];
		} elseif (($id & 2) > 0 && array_key_exists('log.level', $input) && $input['log.level'] === null) {
			$object->logLevel = null;
		}
		if (($id & 1) > 0 && isset($input['logLevel'])) {
			$object->logLevel = $input['logLevel'];
		} elseif (($id & 1) > 0 && array_key_exists('logLevel', $input) && $input['logLevel'] === null) {
			$object->logLevel = null;
		}
		if (($id & 2) > 0 && isset($input['logLevel'])) {
			$object->logLevel = $input['logLevel'];
		} elseif (($id & 2) > 0 && array_key_exists('logLevel', $input) && $input['logLevel'] === null) {
			$object->logLevel = null;
		}

		if (($id & 2) > 0 && isset($input['query.lookback-delta'])) {
			$object->queryLookbackDelta = $input['query.lookback-delta'];
		} elseif (($id & 2) > 0 && array_key_exists('query.lookback-delta', $input) && $input['query.lookback-delta'] === null) {
			$object->queryLookbackDelta = null;
		}
		if (($id & 1) > 0 && isset($input['queryLookbackDelta'])) {
			$object->queryLookbackDelta = $input['queryLookbackDelta'];
		} elseif (($id & 1) > 0 && array_key_exists('queryLookbackDelta', $input) && $input['queryLookbackDelta'] === null) {
			$object->queryLookbackDelta = null;
		}
		if (($id & 2) > 0 && isset($input['queryLookbackDelta'])) {
			$object->queryLookbackDelta = $input['queryLookbackDelta'];
		} elseif (($id & 2) > 0 && array_key_exists('queryLookbackDelta', $input) && $input['queryLookbackDelta'] === null) {
			$object->queryLookbackDelta = null;
		}

		if (($id & 2) > 0 && isset($input['query.max-concurrency'])) {
			$object->queryMaxConcurrency = $input['query.max-concurrency'];
		} elseif (($id & 2) > 0 && array_key_exists('query.max-concurrency', $input) && $input['query.max-concurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}
		if (($id & 1) > 0 && isset($input['queryMaxConcurrency'])) {
			$object->queryMaxConcurrency = $input['queryMaxConcurrency'];
		} elseif (($id & 1) > 0 && array_key_exists('queryMaxConcurrency', $input) && $input['queryMaxConcurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}
		if (($id & 2) > 0 && isset($input['queryMaxConcurrency'])) {
			$object->queryMaxConcurrency = $input['queryMaxConcurrency'];
		} elseif (($id & 2) > 0 && array_key_exists('queryMaxConcurrency', $input) && $input['queryMaxConcurrency'] === null) {
			$object->queryMaxConcurrency = null;
		}

		if (($id & 2) > 0 && isset($input['query.timeout'])) {
			$object->queryTimeout = $input['query.timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('query.timeout', $input) && $input['query.timeout'] === null) {
			$object->queryTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['queryTimeout'])) {
			$object->queryTimeout = $input['queryTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('queryTimeout', $input) && $input['queryTimeout'] === null) {
			$object->queryTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['queryTimeout'])) {
			$object->queryTimeout = $input['queryTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('queryTimeout', $input) && $input['queryTimeout'] === null) {
			$object->queryTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.max-block-duration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storage.tsdb.max-block-duration'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.max-block-duration', $input) && $input['storage.tsdb.max-block-duration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbMaxBlockDuration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storageTsdbMaxBlockDuration'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbMaxBlockDuration', $input) && $input['storageTsdbMaxBlockDuration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbMaxBlockDuration'])) {
			$object->storageTsdbMaxBlockDuration = $input['storageTsdbMaxBlockDuration'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbMaxBlockDuration', $input) && $input['storageTsdbMaxBlockDuration'] === null) {
			$object->storageTsdbMaxBlockDuration = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.min-block-duration'])) {
			$object->storageTsdbMinBlockDuration = $input['storage.tsdb.min-block-duration'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.min-block-duration', $input) && $input['storage.tsdb.min-block-duration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbMinBlockDuration'])) {
			$object->storageTsdbMinBlockDuration = $input['storageTsdbMinBlockDuration'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbMinBlockDuration', $input) && $input['storageTsdbMinBlockDuration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbMinBlockDuration'])) {
			$object->storageTsdbMinBlockDuration = $input['storageTsdbMinBlockDuration'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbMinBlockDuration', $input) && $input['storageTsdbMinBlockDuration'] === null) {
			$object->storageTsdbMinBlockDuration = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.path'])) {
			$object->storageTsdbPath = $input['storage.tsdb.path'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.path', $input) && $input['storage.tsdb.path'] === null) {
			$object->storageTsdbPath = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbPath'])) {
			$object->storageTsdbPath = $input['storageTsdbPath'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbPath', $input) && $input['storageTsdbPath'] === null) {
			$object->storageTsdbPath = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbPath'])) {
			$object->storageTsdbPath = $input['storageTsdbPath'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbPath', $input) && $input['storageTsdbPath'] === null) {
			$object->storageTsdbPath = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.retention'])) {
			$object->storageTsdbRetention = $input['storage.tsdb.retention'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.retention', $input) && $input['storage.tsdb.retention'] === null) {
			$object->storageTsdbRetention = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbRetention'])) {
			$object->storageTsdbRetention = $input['storageTsdbRetention'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbRetention', $input) && $input['storageTsdbRetention'] === null) {
			$object->storageTsdbRetention = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbRetention'])) {
			$object->storageTsdbRetention = $input['storageTsdbRetention'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbRetention', $input) && $input['storageTsdbRetention'] === null) {
			$object->storageTsdbRetention = null;
		}

		if (($id & 2) > 0 && isset($input['storage.tsdb.use-lockfile'])) {
			$object->storageTsdbUseLockfile = $input['storage.tsdb.use-lockfile'];
		} elseif (($id & 2) > 0 && array_key_exists('storage.tsdb.use-lockfile', $input) && $input['storage.tsdb.use-lockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}
		if (($id & 1) > 0 && isset($input['storageTsdbUseLockfile'])) {
			$object->storageTsdbUseLockfile = $input['storageTsdbUseLockfile'];
		} elseif (($id & 1) > 0 && array_key_exists('storageTsdbUseLockfile', $input) && $input['storageTsdbUseLockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}
		if (($id & 2) > 0 && isset($input['storageTsdbUseLockfile'])) {
			$object->storageTsdbUseLockfile = $input['storageTsdbUseLockfile'];
		} elseif (($id & 2) > 0 && array_key_exists('storageTsdbUseLockfile', $input) && $input['storageTsdbUseLockfile'] === null) {
			$object->storageTsdbUseLockfile = null;
		}

		if (($id & 2) > 0 && isset($input['web.console.libraries'])) {
			$object->webConsoleLibraries = $input['web.console.libraries'];
		} elseif (($id & 2) > 0 && array_key_exists('web.console.libraries', $input) && $input['web.console.libraries'] === null) {
			$object->webConsoleLibraries = null;
		}
		if (($id & 1) > 0 && isset($input['webConsoleLibraries'])) {
			$object->webConsoleLibraries = $input['webConsoleLibraries'];
		} elseif (($id & 1) > 0 && array_key_exists('webConsoleLibraries', $input) && $input['webConsoleLibraries'] === null) {
			$object->webConsoleLibraries = null;
		}
		if (($id & 2) > 0 && isset($input['webConsoleLibraries'])) {
			$object->webConsoleLibraries = $input['webConsoleLibraries'];
		} elseif (($id & 2) > 0 && array_key_exists('webConsoleLibraries', $input) && $input['webConsoleLibraries'] === null) {
			$object->webConsoleLibraries = null;
		}

		if (($id & 2) > 0 && isset($input['web.console.templates'])) {
			$object->webConsoleTemplates = $input['web.console.templates'];
		} elseif (($id & 2) > 0 && array_key_exists('web.console.templates', $input) && $input['web.console.templates'] === null) {
			$object->webConsoleTemplates = null;
		}
		if (($id & 1) > 0 && isset($input['webConsoleTemplates'])) {
			$object->webConsoleTemplates = $input['webConsoleTemplates'];
		} elseif (($id & 1) > 0 && array_key_exists('webConsoleTemplates', $input) && $input['webConsoleTemplates'] === null) {
			$object->webConsoleTemplates = null;
		}
		if (($id & 2) > 0 && isset($input['webConsoleTemplates'])) {
			$object->webConsoleTemplates = $input['webConsoleTemplates'];
		} elseif (($id & 2) > 0 && array_key_exists('webConsoleTemplates', $input) && $input['webConsoleTemplates'] === null) {
			$object->webConsoleTemplates = null;
		}

		if (($id & 2) > 0 && isset($input['web.enable-admin-api'])) {
			$object->webEnableAdminApi = $input['web.enable-admin-api'];
		} elseif (($id & 2) > 0 && array_key_exists('web.enable-admin-api', $input) && $input['web.enable-admin-api'] === null) {
			$object->webEnableAdminApi = null;
		}
		if (($id & 1) > 0 && isset($input['webEnableAdminApi'])) {
			$object->webEnableAdminApi = $input['webEnableAdminApi'];
		} elseif (($id & 1) > 0 && array_key_exists('webEnableAdminApi', $input) && $input['webEnableAdminApi'] === null) {
			$object->webEnableAdminApi = null;
		}
		if (($id & 2) > 0 && isset($input['webEnableAdminApi'])) {
			$object->webEnableAdminApi = $input['webEnableAdminApi'];
		} elseif (($id & 2) > 0 && array_key_exists('webEnableAdminApi', $input) && $input['webEnableAdminApi'] === null) {
			$object->webEnableAdminApi = null;
		}

		if (($id & 2) > 0 && isset($input['web.enable-lifecycle'])) {
			$object->webEnableLifecycle = $input['web.enable-lifecycle'];
		} elseif (($id & 2) > 0 && array_key_exists('web.enable-lifecycle', $input) && $input['web.enable-lifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}
		if (($id & 1) > 0 && isset($input['webEnableLifecycle'])) {
			$object->webEnableLifecycle = $input['webEnableLifecycle'];
		} elseif (($id & 1) > 0 && array_key_exists('webEnableLifecycle', $input) && $input['webEnableLifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}
		if (($id & 2) > 0 && isset($input['webEnableLifecycle'])) {
			$object->webEnableLifecycle = $input['webEnableLifecycle'];
		} elseif (($id & 2) > 0 && array_key_exists('webEnableLifecycle', $input) && $input['webEnableLifecycle'] === null) {
			$object->webEnableLifecycle = null;
		}

		if (($id & 2) > 0 && isset($input['web.external-url'])) {
			$object->webExternalUrl = $input['web.external-url'];
		} elseif (($id & 2) > 0 && array_key_exists('web.external-url', $input) && $input['web.external-url'] === null) {
			$object->webExternalUrl = null;
		}
		if (($id & 1) > 0 && isset($input['webExternalUrl'])) {
			$object->webExternalUrl = $input['webExternalUrl'];
		} elseif (($id & 1) > 0 && array_key_exists('webExternalUrl', $input) && $input['webExternalUrl'] === null) {
			$object->webExternalUrl = null;
		}
		if (($id & 2) > 0 && isset($input['webExternalUrl'])) {
			$object->webExternalUrl = $input['webExternalUrl'];
		} elseif (($id & 2) > 0 && array_key_exists('webExternalUrl', $input) && $input['webExternalUrl'] === null) {
			$object->webExternalUrl = null;
		}

		if (($id & 2) > 0 && isset($input['web.listen-address'])) {
			$object->webListenAddress = $input['web.listen-address'];
		} elseif (($id & 2) > 0 && array_key_exists('web.listen-address', $input) && $input['web.listen-address'] === null) {
			$object->webListenAddress = null;
		}
		if (($id & 1) > 0 && isset($input['webListenAddress'])) {
			$object->webListenAddress = $input['webListenAddress'];
		} elseif (($id & 1) > 0 && array_key_exists('webListenAddress', $input) && $input['webListenAddress'] === null) {
			$object->webListenAddress = null;
		}
		if (($id & 2) > 0 && isset($input['webListenAddress'])) {
			$object->webListenAddress = $input['webListenAddress'];
		} elseif (($id & 2) > 0 && array_key_exists('webListenAddress', $input) && $input['webListenAddress'] === null) {
			$object->webListenAddress = null;
		}

		if (($id & 2) > 0 && isset($input['web.local-assets'])) {
			$object->webLocalAssets = $input['web.local-assets'];
		} elseif (($id & 2) > 0 && array_key_exists('web.local-assets', $input) && $input['web.local-assets'] === null) {
			$object->webLocalAssets = null;
		}
		if (($id & 1) > 0 && isset($input['webLocalAssets'])) {
			$object->webLocalAssets = $input['webLocalAssets'];
		} elseif (($id & 1) > 0 && array_key_exists('webLocalAssets', $input) && $input['webLocalAssets'] === null) {
			$object->webLocalAssets = null;
		}
		if (($id & 2) > 0 && isset($input['webLocalAssets'])) {
			$object->webLocalAssets = $input['webLocalAssets'];
		} elseif (($id & 2) > 0 && array_key_exists('webLocalAssets', $input) && $input['webLocalAssets'] === null) {
			$object->webLocalAssets = null;
		}

		if (($id & 2) > 0 && isset($input['web.max-connections'])) {
			$object->webMaxConnections = $input['web.max-connections'];
		} elseif (($id & 2) > 0 && array_key_exists('web.max-connections', $input) && $input['web.max-connections'] === null) {
			$object->webMaxConnections = null;
		}
		if (($id & 1) > 0 && isset($input['webMaxConnections'])) {
			$object->webMaxConnections = $input['webMaxConnections'];
		} elseif (($id & 1) > 0 && array_key_exists('webMaxConnections', $input) && $input['webMaxConnections'] === null) {
			$object->webMaxConnections = null;
		}
		if (($id & 2) > 0 && isset($input['webMaxConnections'])) {
			$object->webMaxConnections = $input['webMaxConnections'];
		} elseif (($id & 2) > 0 && array_key_exists('webMaxConnections', $input) && $input['webMaxConnections'] === null) {
			$object->webMaxConnections = null;
		}

		if (($id & 2) > 0 && isset($input['web.read-timeout'])) {
			$object->webReadTimeout = $input['web.read-timeout'];
		} elseif (($id & 2) > 0 && array_key_exists('web.read-timeout', $input) && $input['web.read-timeout'] === null) {
			$object->webReadTimeout = null;
		}
		if (($id & 1) > 0 && isset($input['webReadTimeout'])) {
			$object->webReadTimeout = $input['webReadTimeout'];
		} elseif (($id & 1) > 0 && array_key_exists('webReadTimeout', $input) && $input['webReadTimeout'] === null) {
			$object->webReadTimeout = null;
		}
		if (($id & 2) > 0 && isset($input['webReadTimeout'])) {
			$object->webReadTimeout = $input['webReadTimeout'];
		} elseif (($id & 2) > 0 && array_key_exists('webReadTimeout', $input) && $input['webReadTimeout'] === null) {
			$object->webReadTimeout = null;
		}

		if (($id & 2) > 0 && isset($input['web.route-prefix'])) {
			$object->webRoutePrefix = $input['web.route-prefix'];
		} elseif (($id & 2) > 0 && array_key_exists('web.route-prefix', $input) && $input['web.route-prefix'] === null) {
			$object->webRoutePrefix = null;
		}
		if (($id & 1) > 0 && isset($input['webRoutePrefix'])) {
			$object->webRoutePrefix = $input['webRoutePrefix'];
		} elseif (($id & 1) > 0 && array_key_exists('webRoutePrefix', $input) && $input['webRoutePrefix'] === null) {
			$object->webRoutePrefix = null;
		}
		if (($id & 2) > 0 && isset($input['webRoutePrefix'])) {
			$object->webRoutePrefix = $input['webRoutePrefix'];
		} elseif (($id & 2) > 0 && array_key_exists('webRoutePrefix', $input) && $input['webRoutePrefix'] === null) {
			$object->webRoutePrefix = null;
		}

		if (($id & 2) > 0 && isset($input['web.user-assets'])) {
			$object->webUserAssets = $input['web.user-assets'];
		} elseif (($id & 2) > 0 && array_key_exists('web.user-assets', $input) && $input['web.user-assets'] === null) {
			$object->webUserAssets = null;
		}
		if (($id & 1) > 0 && isset($input['webUserAssets'])) {
			$object->webUserAssets = $input['webUserAssets'];
		} elseif (($id & 1) > 0 && array_key_exists('webUserAssets', $input) && $input['webUserAssets'] === null) {
			$object->webUserAssets = null;
		}
		if (($id & 2) > 0 && isset($input['webUserAssets'])) {
			$object->webUserAssets = $input['webUserAssets'];
		} elseif (($id & 2) > 0 && array_key_exists('webUserAssets', $input) && $input['webUserAssets'] === null) {
			$object->webUserAssets = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\FlagsData to object
	 *
	 * @param FlagsData $object
	 * @param string $group
	 * @param array $filter
	 *
	 * @throws \Exception
	 *
	 * @return object
	 */
	public static function toObject($object, $group = null, $filter = null)
	{
		if ($object === null) {
			return null;
		}
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof FlagsData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\FlagsData.');
		}

		if (Stack::$objects === null) {
			Stack::$objects = new \SplObjectStorage();
		}

		if (Stack::$objects->contains($object)) {
			return null;
		}

		Stack::$objects->attach($object);

		try {
			$output = array();

			if (($id & 2) > 0 && ($filter === null || isset($filter['alertmanager.notification-queue-capacity']))) {
				$output['alertmanager.notification-queue-capacity'] = $object->alertmanagerNotificationQueueCapacity;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['alertmanagerNotificationQueueCapacity']))) {
				$output['alertmanagerNotificationQueueCapacity'] = $object->alertmanagerNotificationQueueCapacity;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['alertmanager.timeout']))) {
				$output['alertmanager.timeout'] = $object->alertmanagerTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['alertmanagerTimeout']))) {
				$output['alertmanagerTimeout'] = $object->alertmanagerTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['config.file']))) {
				$output['config.file'] = $object->configFile;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['configFile']))) {
				$output['configFile'] = $object->configFile;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['log.level']))) {
				$output['log.level'] = $object->logLevel;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['logLevel']))) {
				$output['logLevel'] = $object->logLevel;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.lookback-delta']))) {
				$output['query.lookback-delta'] = $object->queryLookbackDelta;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryLookbackDelta']))) {
				$output['queryLookbackDelta'] = $object->queryLookbackDelta;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.max-concurrency']))) {
				$output['query.max-concurrency'] = $object->queryMaxConcurrency;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryMaxConcurrency']))) {
				$output['queryMaxConcurrency'] = $object->queryMaxConcurrency;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['query.timeout']))) {
				$output['query.timeout'] = $object->queryTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['queryTimeout']))) {
				$output['queryTimeout'] = $object->queryTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.max-block-duration']))) {
				$output['storage.tsdb.max-block-duration'] = $object->storageTsdbMaxBlockDuration;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbMaxBlockDuration']))) {
				$output['storageTsdbMaxBlockDuration'] = $object->storageTsdbMaxBlockDuration;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.min-block-duration']))) {
				$output['storage.tsdb.min-block-duration'] = $object->storageTsdbMinBlockDuration;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbMinBlockDuration']))) {
				$output['storageTsdbMinBlockDuration'] = $object->storageTsdbMinBlockDuration;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.path']))) {
				$output['storage.tsdb.path'] = $object->storageTsdbPath;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbPath']))) {
				$output['storageTsdbPath'] = $object->storageTsdbPath;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.retention']))) {
				$output['storage.tsdb.retention'] = $object->storageTsdbRetention;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbRetention']))) {
				$output['storageTsdbRetention'] = $object->storageTsdbRetention;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['storage.tsdb.use-lockfile']))) {
				$output['storage.tsdb.use-lockfile'] = $object->storageTsdbUseLockfile;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['storageTsdbUseLockfile']))) {
				$output['storageTsdbUseLockfile'] = $object->storageTsdbUseLockfile;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.console.libraries']))) {
				$output['web.console.libraries'] = $object->webConsoleLibraries;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webConsoleLibraries']))) {
				$output['webConsoleLibraries'] = $object->webConsoleLibraries;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.console.templates']))) {
				$output['web.console.templates'] = $object->webConsoleTemplates;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webConsoleTemplates']))) {
				$output['webConsoleTemplates'] = $object->webConsoleTemplates;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.enable-admin-api']))) {
				$output['web.enable-admin-api'] = $object->webEnableAdminApi;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webEnableAdminApi']))) {
				$output['webEnableAdminApi'] = $object->webEnableAdminApi;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.enable-lifecycle']))) {
				$output['web.enable-lifecycle'] = $object->webEnableLifecycle;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webEnableLifecycle']))) {
				$output['webEnableLifecycle'] = $object->webEnableLifecycle;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.external-url']))) {
				$output['web.external-url'] = $object->webExternalUrl;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webExternalUrl']))) {
				$output['webExternalUrl'] = $object->webExternalUrl;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.listen-address']))) {
				$output['web.listen-address'] = $object->webListenAddress;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webListenAddress']))) {
				$output['webListenAddress'] = $object->webListenAddress;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.local-assets']))) {
				$output['web.local-assets'] = $object->webLocalAssets;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webLocalAssets']))) {
				$output['webLocalAssets'] = $object->webLocalAssets;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.max-connections']))) {
				$output['web.max-connections'] = $object->webMaxConnections;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webMaxConnections']))) {
				$output['webMaxConnections'] = $object->webMaxConnections;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.read-timeout']))) {
				$output['web.read-timeout'] = $object->webReadTimeout;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webReadTimeout']))) {
				$output['webReadTimeout'] = $object->webReadTimeout;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.route-prefix']))) {
				$output['web.route-prefix'] = $object->webRoutePrefix;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webRoutePrefix']))) {
				$output['webRoutePrefix'] = $object->webRoutePrefix;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['web.user-assets']))) {
				$output['web.user-assets'] = $object->webUserAssets;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['webUserAssets']))) {
				$output['webUserAssets'] = $object->webUserAssets;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\FlagsData from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param FlagsData $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return FlagsData
	 */
	public static function fromJson($json, $group = null, $object = null)
	{
		if (is_array($json)) {
			// ok, nothing to do here
		} elseif (is_string($json)) {
			$decoded = json_decode($json, true);
			if ($decoded === null && $json !== '' && strcasecmp($json, 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $json . '.');
			}
			$json = $decoded;
		} else {
			throw new \InvalidArgumentException('Expected array, or string, ' . gettype($json) . ' given.');
		}

		return self::fromObject($json, 'json:' . $group, $object);
	}


	/**
	 * Serializes \PApi\Response\FlagsData to JSON string
	 *
	 * @param FlagsData $object
	 * @param string $group
	 * @param array|int $filterOrOptions
	 * @param int $options
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return string
	 */
	public static function toJson($object, $group = null, $filterOrOptions = null, $options = 0)
	{
		if (is_int($filterOrOptions)) {
			$options = $filterOrOptions;
			$filterOrOptions = null;
		}

		return json_encode(self::toObject($object, 'json:' . $group, $filterOrOptions), $options);
	}


	/**
	 * Serializes \PApi\Response\FlagsData to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param FlagsData $object
	 * @param string $group
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @deprecated
	 *
	 * @return string
	 */
	public static function toJsonString($object, $group = null)
	{
		return self::toJson($object, $group);
	}


	/**
	 * Serializes \PApi\Response\FlagsData to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param FlagsData $object
	 * @param string $group
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @deprecated
	 *
	 * @return string
	 */
	public static function toJsonStringPretty($object, $group = null)
	{
		return self::toJson($object, $group, JSON_PRETTY_PRINT);
	}


	/**
	 * Creates \PApi\Response\FlagsData from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param FlagsData $object
	 *
	 * @return FlagsData
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\FlagsData into array of JSON-serialized strings
	 *
	 * @param FlagsData $object
	 * @param string $group
	 * @param array|int $filterOrOptions
	 * @param int $options
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return array
	 */
	public static function toArrayOfJson($object, $group = null, $filterOrOptions = 0, $options = 0)
	{
		if (is_int($filterOrOptions)) {
			$options = $filterOrOptions;
			$filter = null;
		} else {
			$filter = $filterOrOptions;
		}

		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\FlagsData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		return $output;
	}
}
