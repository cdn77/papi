<?php
namespace PApi\Response\Meta;

use PApi\Response\MetricResult;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\MetricResult
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class MetricResultMeta extends MetricResult implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\MetricResult';
	const SHORT_NAME = 'MetricResult';
	const ENTITY_NAME = 'metricResult';
	const METRIC = 'metric';
	const VALUE = 'value';
	const VALUES = 'values';

	/** @var MetricResultMeta */
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
	 * @return MetricResultMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\MetricResult
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return MetricResult
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new MetricResult();
			case 1:
				return new MetricResult(func_get_arg(0));
			case 2:
				return new MetricResult(func_get_arg(0), func_get_arg(1));
			case 3:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new MetricResult(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\MetricResult to default values
	 *
	 *
	 * @param MetricResult $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof MetricResult)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\MetricResult.');
		}
		$object->metric = NULL;
		$object->value = NULL;
		$object->values = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\MetricResult
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

		if (isset($object->metric)) {
			hash_update($ctx, 'metric');
			foreach ($object->metric instanceof \Traversable ? $object->metric : (array)$object->metric as $v0) {
				hash_update($ctx, (string)$v0);
			}
		}

		if (isset($object->value)) {
			hash_update($ctx, 'value');
			MetricMeta::hash($object->value, $ctx);
		}

		if (isset($object->values)) {
			hash_update($ctx, 'values');
			foreach ($object->values instanceof \Traversable ? $object->values : (array)$object->values as $v0) {
				MetricMeta::hash($v0, $ctx);
			}
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\MetricResult object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param MetricResult $object
	 *
	 * @throws \Exception
	 *
	 * @return MetricResult
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new MetricResult();
		} elseif (!($object instanceof MetricResult)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\MetricResult.');
		}

		if (($id & 1) > 0 && isset($input['metric'])) {
			if (!(isset($object->metric) && is_array($object->metric))) {
				$object->metric = array();
			}
			foreach ($input['metric'] instanceof \Traversable ? $input['metric'] : (array)$input['metric'] as $k0 => $v0) {
				$object->metric[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('metric', $input) && $input['metric'] === null) {
			$object->metric = null;
		}
		if (($id & 2) > 0 && isset($input['metric'])) {
			if (!(isset($object->metric) && is_array($object->metric))) {
				$object->metric = array();
			}
			foreach ($input['metric'] instanceof \Traversable ? $input['metric'] : (array)$input['metric'] as $k0 => $v0) {
				$object->metric[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('metric', $input) && $input['metric'] === null) {
			$object->metric = null;
		}

		if (($id & 1) > 0 && isset($input['value'])) {
			$object->value = MetricMeta::fromArray($input['value'], $group, isset($object->value) ? $object->value : null);
		} elseif (($id & 1) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}
		if (($id & 2) > 0 && isset($input['value'])) {
			$object->value = MetricMeta::fromArray($input['value'], $group, isset($object->value) ? $object->value : null);
		} elseif (($id & 2) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}

		if (($id & 1) > 0 && isset($input['values'])) {
			if (!(isset($object->values) && is_array($object->values))) {
				$object->values = array();
			}
			foreach ($input['values'] instanceof \Traversable ? $input['values'] : (array)$input['values'] as $k0 => $v0) {
				$object->values[$k0] = MetricMeta::fromArray($v0, $group, isset($object->values[$k0]) ? $object->values[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('values', $input) && $input['values'] === null) {
			$object->values = null;
		}
		if (($id & 2) > 0 && isset($input['values'])) {
			if (!(isset($object->values) && is_array($object->values))) {
				$object->values = array();
			}
			foreach ($input['values'] instanceof \Traversable ? $input['values'] : (array)$input['values'] as $k0 => $v0) {
				$object->values[$k0] = MetricMeta::fromArray($v0, $group, isset($object->values[$k0]) ? $object->values[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('values', $input) && $input['values'] === null) {
			$object->values = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\MetricResult to array
	 *
	 * @param MetricResult $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof MetricResult)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\MetricResult.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['metric']))) {
				if (!(isset($output['metric']) && is_array($output['metric']))) {
					$output['metric'] = array();
				}
				foreach ($object->metric instanceof \Traversable ? $object->metric : (array)$object->metric as $k0 => $v0) {
					$output['metric'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->metric) && $filter === null) || isset($filter['metric']))) {
				if (!(isset($output['metric']) && is_array($output['metric']))) {
					$output['metric'] = array();
				}
				foreach ($object->metric instanceof \Traversable ? $object->metric : (array)$object->metric as $k0 => $v0) {
					$output['metric'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['value']))) {
				$output['value'] = MetricMeta::toArray($object->value, $group, $filter === null ? null : $filter['value']);
			}
			if (($id & 2) > 0 && ((isset($object->value) && $filter === null) || isset($filter['value']))) {
				$output['value'] = MetricMeta::toArray($object->value, $group, $filter === null ? null : $filter['value']);
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['values']))) {
				if (!(isset($output['values']) && is_array($output['values']))) {
					$output['values'] = array();
				}
				foreach ($object->values instanceof \Traversable ? $object->values : (array)$object->values as $k0 => $v0) {
					$output['values'][$k0] = MetricMeta::toArray($v0, $group, $filter === null ? null : $filter['values']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->values) && $filter === null) || isset($filter['values']))) {
				if (!(isset($output['values']) && is_array($output['values']))) {
					$output['values'] = array();
				}
				foreach ($object->values instanceof \Traversable ? $object->values : (array)$object->values as $k0 => $v0) {
					$output['values'][$k0] = MetricMeta::toArray($v0, $group, $filter === null ? null : $filter['values']);
				}
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\MetricResult object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param MetricResult $object
	 *
	 * @throws \Exception
	 *
	 * @return MetricResult
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new MetricResult();
		} elseif (!($object instanceof MetricResult)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\MetricResult.');
		}

		if (($id & 1) > 0 && isset($input['metric'])) {
			if (!(isset($object->metric) && is_array($object->metric))) {
				$object->metric = array();
			}
			foreach ($input['metric'] instanceof \Traversable ? $input['metric'] : (array)$input['metric'] as $k0 => $v0) {
				$object->metric[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('metric', $input) && $input['metric'] === null) {
			$object->metric = null;
		}
		if (($id & 2) > 0 && isset($input['metric'])) {
			if (!(isset($object->metric) && is_array($object->metric))) {
				$object->metric = array();
			}
			foreach ($input['metric'] instanceof \Traversable ? $input['metric'] : (array)$input['metric'] as $k0 => $v0) {
				$object->metric[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('metric', $input) && $input['metric'] === null) {
			$object->metric = null;
		}

		if (($id & 1) > 0 && isset($input['value'])) {
			$object->value = MetricMeta::fromObject($input['value'], $group, isset($object->value) ? $object->value : null);
		} elseif (($id & 1) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}
		if (($id & 2) > 0 && isset($input['value'])) {
			$object->value = MetricMeta::fromObject($input['value'], $group, isset($object->value) ? $object->value : null);
		} elseif (($id & 2) > 0 && array_key_exists('value', $input) && $input['value'] === null) {
			$object->value = null;
		}

		if (($id & 1) > 0 && isset($input['values'])) {
			if (!(isset($object->values) && is_array($object->values))) {
				$object->values = array();
			}
			foreach ($input['values'] instanceof \Traversable ? $input['values'] : (array)$input['values'] as $k0 => $v0) {
				$object->values[$k0] = MetricMeta::fromObject($v0, $group, isset($object->values[$k0]) ? $object->values[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('values', $input) && $input['values'] === null) {
			$object->values = null;
		}
		if (($id & 2) > 0 && isset($input['values'])) {
			if (!(isset($object->values) && is_array($object->values))) {
				$object->values = array();
			}
			foreach ($input['values'] instanceof \Traversable ? $input['values'] : (array)$input['values'] as $k0 => $v0) {
				$object->values[$k0] = MetricMeta::fromObject($v0, $group, isset($object->values[$k0]) ? $object->values[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('values', $input) && $input['values'] === null) {
			$object->values = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\MetricResult to object
	 *
	 * @param MetricResult $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof MetricResult)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\MetricResult.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['metric']))) {
				if (!(isset($output['metric']) && is_array($output['metric']))) {
					$output['metric'] = array();
				}
				foreach ($object->metric instanceof \Traversable ? $object->metric : (array)$object->metric as $k0 => $v0) {
					$output['metric'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->metric) && $filter === null) || isset($filter['metric']))) {
				if (!(isset($output['metric']) && is_array($output['metric']))) {
					$output['metric'] = array();
				}
				foreach ($object->metric instanceof \Traversable ? $object->metric : (array)$object->metric as $k0 => $v0) {
					$output['metric'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['value']))) {
				$output['value'] = MetricMeta::toObject($object->value, $group, $filter === null ? null : $filter['value']);
			}
			if (($id & 2) > 0 && ((isset($object->value) && $filter === null) || isset($filter['value']))) {
				$output['value'] = MetricMeta::toObject($object->value, $group, $filter === null ? null : $filter['value']);
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['values']))) {
				if (!(isset($output['values']) && is_array($output['values']))) {
					$output['values'] = array();
				}
				foreach ($object->values instanceof \Traversable ? $object->values : (array)$object->values as $k0 => $v0) {
					$output['values'][$k0] = MetricMeta::toObject($v0, $group, $filter === null ? null : $filter['values']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->values) && $filter === null) || isset($filter['values']))) {
				if (!(isset($output['values']) && is_array($output['values']))) {
					$output['values'] = array();
				}
				foreach ($object->values instanceof \Traversable ? $object->values : (array)$object->values as $k0 => $v0) {
					$output['values'][$k0] = MetricMeta::toObject($v0, $group, $filter === null ? null : $filter['values']);
				}
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\MetricResult from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param MetricResult $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return MetricResult
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
	 * Serializes \PApi\Response\MetricResult to JSON string
	 *
	 * @param MetricResult $object
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
	 * Serializes \PApi\Response\MetricResult to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param MetricResult $object
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
	 * Serializes \PApi\Response\MetricResult to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param MetricResult $object
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
	 * Creates \PApi\Response\MetricResult from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param MetricResult $object
	 *
	 * @return MetricResult
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (($id & 2) > 0 && isset($input['metric']) && is_string($input['metric'])) {
			$decoded = json_decode($input['metric'], true);
			if ($decoded === null && $input['metric'] !== '' && strcasecmp($input['metric'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['metric'] . '.');
			}
			$input['metric'] = $decoded;
		}

		if (($id & 2) > 0 && isset($input['value']) && is_string($input['value'])) {
			$decoded = json_decode($input['value'], true);
			if ($decoded === null && $input['value'] !== '' && strcasecmp($input['value'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['value'] . '.');
			}
			$input['value'] = $decoded;
		}

		if (($id & 2) > 0 && isset($input['values']) && is_string($input['values'])) {
			$decoded = json_decode($input['values'], true);
			if ($decoded === null && $input['values'] !== '' && strcasecmp($input['values'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['values'] . '.');
			}
			$input['values'] = $decoded;
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\MetricResult into array of JSON-serialized strings
	 *
	 * @param MetricResult $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\MetricResult' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		if (($id & 2) > 0 && isset($output['metric']) && ($filter === null || isset($filter['metric']))) {
			$output['metric'] = json_encode($output['metric'], $options);
		}

		if (($id & 2) > 0 && isset($output['value']) && ($filter === null || isset($filter['value']))) {
			$output['value'] = json_encode($output['value'], $options);
		}

		if (($id & 2) > 0 && isset($output['values']) && ($filter === null || isset($filter['values']))) {
			$output['values'] = json_encode($output['values'], $options);
		}

		return $output;
	}
}
