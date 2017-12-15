<?php
namespace PApi\Response\Meta;

use PApi\Response\AlertManager;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\AlertManager
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class AlertManagerMeta extends AlertManager implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\AlertManager';
	const SHORT_NAME = 'AlertManager';
	const ENTITY_NAME = 'alertManager';
	const URL = 'url';

	/** @var AlertManagerMeta */
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
	 * @return AlertManagerMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\AlertManager
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return AlertManager
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new AlertManager();
			case 1:
				return new AlertManager(func_get_arg(0));
			case 2:
				return new AlertManager(func_get_arg(0), func_get_arg(1));
			case 3:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new AlertManager(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\AlertManager to default values
	 *
	 *
	 * @param AlertManager $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof AlertManager)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\AlertManager.');
		}
		$object->url = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\AlertManager
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

		if (isset($object->url)) {
			hash_update($ctx, 'url');
			hash_update($ctx, (string)$object->url);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\AlertManager object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param AlertManager $object
	 *
	 * @throws \Exception
	 *
	 * @return AlertManager
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new AlertManager();
		} elseif (!($object instanceof AlertManager)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\AlertManager.');
		}

		if (($id & 1) > 0 && isset($input['url'])) {
			$object->url = $input['url'];
		} elseif (($id & 1) > 0 && array_key_exists('url', $input) && $input['url'] === null) {
			$object->url = null;
		}
		if (($id & 2) > 0 && isset($input['url'])) {
			$object->url = $input['url'];
		} elseif (($id & 2) > 0 && array_key_exists('url', $input) && $input['url'] === null) {
			$object->url = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\AlertManager to array
	 *
	 * @param AlertManager $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof AlertManager)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\AlertManager.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['url']))) {
				$output['url'] = $object->url;
			}
			if (($id & 2) > 0 && ((isset($object->url) && $filter === null) || isset($filter['url']))) {
				$output['url'] = $object->url;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\AlertManager object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param AlertManager $object
	 *
	 * @throws \Exception
	 *
	 * @return AlertManager
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new AlertManager();
		} elseif (!($object instanceof AlertManager)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\AlertManager.');
		}

		if (($id & 1) > 0 && isset($input['url'])) {
			$object->url = $input['url'];
		} elseif (($id & 1) > 0 && array_key_exists('url', $input) && $input['url'] === null) {
			$object->url = null;
		}
		if (($id & 2) > 0 && isset($input['url'])) {
			$object->url = $input['url'];
		} elseif (($id & 2) > 0 && array_key_exists('url', $input) && $input['url'] === null) {
			$object->url = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\AlertManager to object
	 *
	 * @param AlertManager $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof AlertManager)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\AlertManager.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['url']))) {
				$output['url'] = $object->url;
			}
			if (($id & 2) > 0 && ((isset($object->url) && $filter === null) || isset($filter['url']))) {
				$output['url'] = $object->url;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\AlertManager from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param AlertManager $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return AlertManager
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
	 * Serializes \PApi\Response\AlertManager to JSON string
	 *
	 * @param AlertManager $object
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
	 * Serializes \PApi\Response\AlertManager to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param AlertManager $object
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
	 * Serializes \PApi\Response\AlertManager to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param AlertManager $object
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
	 * Creates \PApi\Response\AlertManager from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param AlertManager $object
	 *
	 * @return AlertManager
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\AlertManager into array of JSON-serialized strings
	 *
	 * @param AlertManager $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\AlertManager' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		return $output;
	}
}
