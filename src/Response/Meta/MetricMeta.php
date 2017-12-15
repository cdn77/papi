<?php
namespace PApi\Response\Meta;

use PApi\Response\Metric;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\Metric
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class MetricMeta extends Metric implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\Metric';
	const SHORT_NAME = 'Metric';
	const ENTITY_NAME = 'metric';
	const TIME = 'time';
	const VALUE = 'value';

	/** @var MetricMeta */
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
	 * @return MetricMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\Metric
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Metric
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new Metric();
			case 1:
				return new Metric(func_get_arg(0));
			case 2:
				return new Metric(func_get_arg(0), func_get_arg(1));
			case 3:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new Metric(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\Metric to default values
	 *
	 *
	 * @param Metric $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof Metric)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Metric.');
		}
		$object->time = NULL;
		$object->value = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\Metric
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

		if (isset($object->time)) {
			hash_update($ctx, 'time');
			hash_update($ctx, (string)$object->time);
		}

		if (isset($object->value)) {
			hash_update($ctx, 'value');
			hash_update($ctx, (string)$object->value);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\Metric object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param Metric $object
	 *
	 * @throws \Exception
	 *
	 * @return Metric
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Metric();
		} elseif (!($object instanceof Metric)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Metric.');
		}

		if (($id & 2) > 0 && isset($input['0'])) {
			$object->time = $input['0'];
		} elseif (($id & 2) > 0 && array_key_exists('0', $input) && $input['0'] === null) {
			$object->time = null;
		}
		if (($id & 1) > 0 && isset($input['time'])) {
			$object->time = $input['time'];
		} elseif (($id & 1) > 0 && array_key_exists('time', $input) && $input['time'] === null) {
			$object->time = null;
		}
		if (($id & 2) > 0 && isset($input['time'])) {
			$object->time = $input['time'];
		} elseif (($id & 2) > 0 && array_key_exists('time', $input) && $input['time'] === null) {
			$object->time = null;
		}

		if (($id & 2) > 0 && isset($input['1'])) {
			$object->value = $input['1'];
		} elseif (($id & 2) > 0 && array_key_exists('1', $input) && $input['1'] === null) {
			$object->value = null;
		}
		if (($id & 1) > 0 && isset($input['value'])) {
			$object->value = $input['value'];
		} elseif (($id & 1) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}
		if (($id & 2) > 0 && isset($input['value'])) {
			$object->value = $input['value'];
		} elseif (($id & 2) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\Metric to array
	 *
	 * @param Metric $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Metric)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Metric.');
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

			if (($id & 2) > 0 && ($filter === null || isset($filter['0']))) {
				$output['0'] = $object->time;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['time']))) {
				$output['time'] = $object->time;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['1']))) {
				$output['1'] = $object->value;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['value']))) {
				$output['value'] = $object->value;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\Metric object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param Metric $object
	 *
	 * @throws \Exception
	 *
	 * @return Metric
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Metric();
		} elseif (!($object instanceof Metric)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Metric.');
		}

		if (($id & 2) > 0 && isset($input['0'])) {
			$object->time = $input['0'];
		} elseif (($id & 2) > 0 && array_key_exists('0', $input) && $input['0'] === null) {
			$object->time = null;
		}
		if (($id & 1) > 0 && isset($input['time'])) {
			$object->time = $input['time'];
		} elseif (($id & 1) > 0 && array_key_exists('time', $input) && $input['time'] === null) {
			$object->time = null;
		}
		if (($id & 2) > 0 && isset($input['time'])) {
			$object->time = $input['time'];
		} elseif (($id & 2) > 0 && array_key_exists('time', $input) && $input['time'] === null) {
			$object->time = null;
		}

		if (($id & 2) > 0 && isset($input['1'])) {
			$object->value = $input['1'];
		} elseif (($id & 2) > 0 && array_key_exists('1', $input) && $input['1'] === null) {
			$object->value = null;
		}
		if (($id & 1) > 0 && isset($input['value'])) {
			$object->value = $input['value'];
		} elseif (($id & 1) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}
		if (($id & 2) > 0 && isset($input['value'])) {
			$object->value = $input['value'];
		} elseif (($id & 2) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\Metric to object
	 *
	 * @param Metric $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Metric)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Metric.');
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

			if (($id & 2) > 0 && ($filter === null || isset($filter['0']))) {
				$output['0'] = $object->time;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['time']))) {
				$output['time'] = $object->time;
			}

			if (($id & 2) > 0 && ($filter === null || isset($filter['1']))) {
				$output['1'] = $object->value;
			}
			if (($id & 1) > 0 && ($filter === null || isset($filter['value']))) {
				$output['value'] = $object->value;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\Metric from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param Metric $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Metric
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
	 * Serializes \PApi\Response\Metric to JSON string
	 *
	 * @param Metric $object
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
	 * Serializes \PApi\Response\Metric to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param Metric $object
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
	 * Serializes \PApi\Response\Metric to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param Metric $object
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
	 * Creates \PApi\Response\Metric from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param Metric $object
	 *
	 * @return Metric
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\Metric into array of JSON-serialized strings
	 *
	 * @param Metric $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Metric' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		return $output;
	}
}
