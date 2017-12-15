<?php
namespace PApi\Response\Meta;

use PApi\Response\Response;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\Response
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class ResponseMeta extends Response implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\Response';
	const SHORT_NAME = 'Response';
	const ENTITY_NAME = 'response';
	const STATUS = 'status';
	const ERROR = 'error';
	const ERROR_TYPE = 'errorType';

	/** @var ResponseMeta */
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
	 * @return ResponseMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\Response
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Response
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new Response();
			case 1:
				return new Response(func_get_arg(0));
			case 2:
				return new Response(func_get_arg(0), func_get_arg(1));
			case 3:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new Response(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\Response to default values
	 *
	 *
	 * @param Response $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof Response)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Response.');
		}
		$object->status = NULL;
		$object->error = NULL;
		$object->errorType = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\Response
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
	 * Creates \PApi\Response\Response object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param Response $object
	 *
	 * @throws \Exception
	 *
	 * @return Response
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Response();
		} elseif (!($object instanceof Response)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Response.');
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
	 * Serializes \PApi\Response\Response to array
	 *
	 * @param Response $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Response)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Response.');
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
	 * Creates \PApi\Response\Response object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param Response $object
	 *
	 * @throws \Exception
	 *
	 * @return Response
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Response();
		} elseif (!($object instanceof Response)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Response.');
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
	 * Serializes \PApi\Response\Response to object
	 *
	 * @param Response $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Response)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Response.');
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
	 * Creates \PApi\Response\Response from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param Response $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Response
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
	 * Serializes \PApi\Response\Response to JSON string
	 *
	 * @param Response $object
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
	 * Serializes \PApi\Response\Response to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param Response $object
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
	 * Serializes \PApi\Response\Response to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param Response $object
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
	 * Creates \PApi\Response\Response from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param Response $object
	 *
	 * @return Response
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\Response into array of JSON-serialized strings
	 *
	 * @param Response $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Response' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		return $output;
	}
}
