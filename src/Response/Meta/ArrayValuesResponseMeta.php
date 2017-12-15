<?php
namespace PApi\Response\Meta;

use PApi\Response\ArrayValuesResponse;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\ArrayValuesResponse
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class ArrayValuesResponseMeta extends ArrayValuesResponse implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\ArrayValuesResponse';
	const SHORT_NAME = 'ArrayValuesResponse';
	const ENTITY_NAME = 'arrayValuesResponse';
	const DATA = 'data';
	const STATUS = 'status';
	const ERROR = 'error';
	const ERROR_TYPE = 'errorType';

	/** @var ArrayValuesResponseMeta */
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
	 * @return ArrayValuesResponseMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\ArrayValuesResponse
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return ArrayValuesResponse
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new ArrayValuesResponse();
			case 1:
				return new ArrayValuesResponse(func_get_arg(0));
			case 2:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1));
			case 3:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new ArrayValuesResponse(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\ArrayValuesResponse to default values
	 *
	 *
	 * @param ArrayValuesResponse $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof ArrayValuesResponse)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ArrayValuesResponse.');
		}
		$object->data = NULL;
		$object->status = NULL;
		$object->error = NULL;
		$object->errorType = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\ArrayValuesResponse
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

		if (isset($object->data)) {
			hash_update($ctx, 'data');
			foreach ($object->data instanceof \Traversable ? $object->data : (array)$object->data as $v0) {
				hash_update($ctx, (string)$v0);
			}
		}

		if (isset($object->status)) {
			hash_update($ctx, 'status');
			hash_update($ctx, (string)$object->status);
		}

		if (isset($object->error)) {
			hash_update($ctx, 'error');
			hash_update($ctx, (string)$object->error);
		}

		if (isset($object->errorType)) {
			hash_update($ctx, 'errorType');
			hash_update($ctx, (string)$object->errorType);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\ArrayValuesResponse object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param ArrayValuesResponse $object
	 *
	 * @throws \Exception
	 *
	 * @return ArrayValuesResponse
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new ArrayValuesResponse();
		} elseif (!($object instanceof ArrayValuesResponse)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ArrayValuesResponse.');
		}

		if (($id & 1) > 0 && isset($input['data'])) {
			if (!(isset($object->data) && is_array($object->data))) {
				$object->data = array();
			}
			foreach ($input['data'] instanceof \Traversable ? $input['data'] : (array)$input['data'] as $k0 => $v0) {
				$object->data[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('data', $input) && $input['data'] === null) {
			$object->data = null;
		}
		if (($id & 2) > 0 && isset($input['data'])) {
			if (!(isset($object->data) && is_array($object->data))) {
				$object->data = array();
			}
			foreach ($input['data'] instanceof \Traversable ? $input['data'] : (array)$input['data'] as $k0 => $v0) {
				$object->data[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('data', $input) && $input['data'] === null) {
			$object->data = null;
		}

		if (($id & 1) > 0 && isset($input['status'])) {
			$object->status = $input['status'];
		} elseif (($id & 1) > 0 && array_key_exists('status', $input) && $input['status'] === null) {
			$object->status = null;
		}
		if (($id & 2) > 0 && isset($input['status'])) {
			$object->status = $input['status'];
		} elseif (($id & 2) > 0 && array_key_exists('status', $input) && $input['status'] === null) {
			$object->status = null;
		}

		if (($id & 1) > 0 && isset($input['error'])) {
			$object->error = $input['error'];
		} elseif (($id & 1) > 0 && array_key_exists('error', $input) && $input['error'] === null) {
			$object->error = null;
		}
		if (($id & 2) > 0 && isset($input['error'])) {
			$object->error = $input['error'];
		} elseif (($id & 2) > 0 && array_key_exists('error', $input) && $input['error'] === null) {
			$object->error = null;
		}

		if (($id & 1) > 0 && isset($input['errorType'])) {
			$object->errorType = $input['errorType'];
		} elseif (($id & 1) > 0 && array_key_exists('errorType', $input) && $input['errorType'] === null) {
			$object->errorType = null;
		}
		if (($id & 2) > 0 && isset($input['errorType'])) {
			$object->errorType = $input['errorType'];
		} elseif (($id & 2) > 0 && array_key_exists('errorType', $input) && $input['errorType'] === null) {
			$object->errorType = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\ArrayValuesResponse to array
	 *
	 * @param ArrayValuesResponse $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof ArrayValuesResponse)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ArrayValuesResponse.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['data']))) {
				if (!(isset($output['data']) && is_array($output['data']))) {
					$output['data'] = array();
				}
				foreach ($object->data instanceof \Traversable ? $object->data : (array)$object->data as $k0 => $v0) {
					$output['data'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->data) && $filter === null) || isset($filter['data']))) {
				if (!(isset($output['data']) && is_array($output['data']))) {
					$output['data'] = array();
				}
				foreach ($object->data instanceof \Traversable ? $object->data : (array)$object->data as $k0 => $v0) {
					$output['data'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['status']))) {
				$output['status'] = $object->status;
			}
			if (($id & 2) > 0 && ((isset($object->status) && $filter === null) || isset($filter['status']))) {
				$output['status'] = $object->status;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['error']))) {
				$output['error'] = $object->error;
			}
			if (($id & 2) > 0 && ((isset($object->error) && $filter === null) || isset($filter['error']))) {
				$output['error'] = $object->error;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['errorType']))) {
				$output['errorType'] = $object->errorType;
			}
			if (($id & 2) > 0 && ((isset($object->errorType) && $filter === null) || isset($filter['errorType']))) {
				$output['errorType'] = $object->errorType;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\ArrayValuesResponse object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param ArrayValuesResponse $object
	 *
	 * @throws \Exception
	 *
	 * @return ArrayValuesResponse
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new ArrayValuesResponse();
		} elseif (!($object instanceof ArrayValuesResponse)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ArrayValuesResponse.');
		}

		if (($id & 1) > 0 && isset($input['data'])) {
			if (!(isset($object->data) && is_array($object->data))) {
				$object->data = array();
			}
			foreach ($input['data'] instanceof \Traversable ? $input['data'] : (array)$input['data'] as $k0 => $v0) {
				$object->data[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('data', $input) && $input['data'] === null) {
			$object->data = null;
		}
		if (($id & 2) > 0 && isset($input['data'])) {
			if (!(isset($object->data) && is_array($object->data))) {
				$object->data = array();
			}
			foreach ($input['data'] instanceof \Traversable ? $input['data'] : (array)$input['data'] as $k0 => $v0) {
				$object->data[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('data', $input) && $input['data'] === null) {
			$object->data = null;
		}

		if (($id & 1) > 0 && isset($input['status'])) {
			$object->status = $input['status'];
		} elseif (($id & 1) > 0 && array_key_exists('status', $input) && $input['status'] === null) {
			$object->status = null;
		}
		if (($id & 2) > 0 && isset($input['status'])) {
			$object->status = $input['status'];
		} elseif (($id & 2) > 0 && array_key_exists('status', $input) && $input['status'] === null) {
			$object->status = null;
		}

		if (($id & 1) > 0 && isset($input['error'])) {
			$object->error = $input['error'];
		} elseif (($id & 1) > 0 && array_key_exists('error', $input) && $input['error'] === null) {
			$object->error = null;
		}
		if (($id & 2) > 0 && isset($input['error'])) {
			$object->error = $input['error'];
		} elseif (($id & 2) > 0 && array_key_exists('error', $input) && $input['error'] === null) {
			$object->error = null;
		}

		if (($id & 1) > 0 && isset($input['errorType'])) {
			$object->errorType = $input['errorType'];
		} elseif (($id & 1) > 0 && array_key_exists('errorType', $input) && $input['errorType'] === null) {
			$object->errorType = null;
		}
		if (($id & 2) > 0 && isset($input['errorType'])) {
			$object->errorType = $input['errorType'];
		} elseif (($id & 2) > 0 && array_key_exists('errorType', $input) && $input['errorType'] === null) {
			$object->errorType = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\ArrayValuesResponse to object
	 *
	 * @param ArrayValuesResponse $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof ArrayValuesResponse)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ArrayValuesResponse.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['data']))) {
				if (!(isset($output['data']) && is_array($output['data']))) {
					$output['data'] = array();
				}
				foreach ($object->data instanceof \Traversable ? $object->data : (array)$object->data as $k0 => $v0) {
					$output['data'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->data) && $filter === null) || isset($filter['data']))) {
				if (!(isset($output['data']) && is_array($output['data']))) {
					$output['data'] = array();
				}
				foreach ($object->data instanceof \Traversable ? $object->data : (array)$object->data as $k0 => $v0) {
					$output['data'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['status']))) {
				$output['status'] = $object->status;
			}
			if (($id & 2) > 0 && ((isset($object->status) && $filter === null) || isset($filter['status']))) {
				$output['status'] = $object->status;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['error']))) {
				$output['error'] = $object->error;
			}
			if (($id & 2) > 0 && ((isset($object->error) && $filter === null) || isset($filter['error']))) {
				$output['error'] = $object->error;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['errorType']))) {
				$output['errorType'] = $object->errorType;
			}
			if (($id & 2) > 0 && ((isset($object->errorType) && $filter === null) || isset($filter['errorType']))) {
				$output['errorType'] = $object->errorType;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\ArrayValuesResponse from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param ArrayValuesResponse $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return ArrayValuesResponse
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
	 * Serializes \PApi\Response\ArrayValuesResponse to JSON string
	 *
	 * @param ArrayValuesResponse $object
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
	 * Serializes \PApi\Response\ArrayValuesResponse to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param ArrayValuesResponse $object
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
	 * Serializes \PApi\Response\ArrayValuesResponse to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param ArrayValuesResponse $object
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
	 * Creates \PApi\Response\ArrayValuesResponse from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param ArrayValuesResponse $object
	 *
	 * @return ArrayValuesResponse
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (($id & 2) > 0 && isset($input['data']) && is_string($input['data'])) {
			$decoded = json_decode($input['data'], true);
			if ($decoded === null && $input['data'] !== '' && strcasecmp($input['data'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['data'] . '.');
			}
			$input['data'] = $decoded;
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\ArrayValuesResponse into array of JSON-serialized strings
	 *
	 * @param ArrayValuesResponse $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ArrayValuesResponse' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		if (($id & 2) > 0 && isset($output['data']) && ($filter === null || isset($filter['data']))) {
			$output['data'] = json_encode($output['data'], $options);
		}

		return $output;
	}
}
