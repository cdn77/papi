<?php
namespace PApi\Response\Meta;

use PApi\Response\ResponseData;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\ResponseData
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class ResponseDataMeta extends ResponseData implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\ResponseData';
	const SHORT_NAME = 'ResponseData';
	const ENTITY_NAME = 'responseData';
	const RESULT_TYPE = 'resultType';
	const RESULT = 'result';
	const ACTIVE_TARGETS = 'activeTargets';
	const ACTIVE_ALERTMANAGERS = 'activeAlertmanagers';
	const NAME = 'name';

	/** @var ResponseDataMeta */
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
	 * @return ResponseDataMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\ResponseData
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return ResponseData
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new ResponseData();
			case 1:
				return new ResponseData(func_get_arg(0));
			case 2:
				return new ResponseData(func_get_arg(0), func_get_arg(1));
			case 3:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new ResponseData(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\ResponseData to default values
	 *
	 *
	 * @param ResponseData $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof ResponseData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ResponseData.');
		}
		$object->resultType = NULL;
		$object->result = NULL;
		$object->activeTargets = NULL;
		$object->activeAlertmanagers = NULL;
		$object->name = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\ResponseData
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

		if (isset($object->resultType)) {
			hash_update($ctx, 'resultType');
			hash_update($ctx, (string)$object->resultType);
		}

		if (isset($object->result)) {
			hash_update($ctx, 'result');
			foreach ($object->result instanceof \Traversable ? $object->result : (array)$object->result as $v0) {
				MetricResultMeta::hash($v0, $ctx);
			}
		}

		if (isset($object->activeTargets)) {
			hash_update($ctx, 'activeTargets');
			foreach ($object->activeTargets instanceof \Traversable ? $object->activeTargets : (array)$object->activeTargets as $v0) {
				TargetMeta::hash($v0, $ctx);
			}
		}

		if (isset($object->activeAlertmanagers)) {
			hash_update($ctx, 'activeAlertmanagers');
			foreach ($object->activeAlertmanagers instanceof \Traversable ? $object->activeAlertmanagers : (array)$object->activeAlertmanagers as $v0) {
				AlertManagerMeta::hash($v0, $ctx);
			}
		}

		if (isset($object->name)) {
			hash_update($ctx, 'name');
			hash_update($ctx, (string)$object->name);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\ResponseData object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param ResponseData $object
	 *
	 * @throws \Exception
	 *
	 * @return ResponseData
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new ResponseData();
		} elseif (!($object instanceof ResponseData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ResponseData.');
		}

		if (($id & 1) > 0 && isset($input['resultType'])) {
			$object->resultType = $input['resultType'];
		} elseif (($id & 1) > 0 && array_key_exists('resultType', $input) && $input['resultType'] === null) {
			$object->resultType = null;
		}
		if (($id & 2) > 0 && isset($input['resultType'])) {
			$object->resultType = $input['resultType'];
		} elseif (($id & 2) > 0 && array_key_exists('resultType', $input) && $input['resultType'] === null) {
			$object->resultType = null;
		}

		if (($id & 1) > 0 && isset($input['result'])) {
			if (!(isset($object->result) && is_array($object->result))) {
				$object->result = array();
			}
			foreach ($input['result'] instanceof \Traversable ? $input['result'] : (array)$input['result'] as $k0 => $v0) {
				$object->result[$k0] = MetricResultMeta::fromArray($v0, $group, isset($object->result[$k0]) ? $object->result[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('result', $input) && $input['result'] === null) {
			$object->result = null;
		}
		if (($id & 2) > 0 && isset($input['result'])) {
			if (!(isset($object->result) && is_array($object->result))) {
				$object->result = array();
			}
			foreach ($input['result'] instanceof \Traversable ? $input['result'] : (array)$input['result'] as $k0 => $v0) {
				$object->result[$k0] = MetricResultMeta::fromArray($v0, $group, isset($object->result[$k0]) ? $object->result[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('result', $input) && $input['result'] === null) {
			$object->result = null;
		}

		if (($id & 1) > 0 && isset($input['activeTargets'])) {
			if (!(isset($object->activeTargets) && is_array($object->activeTargets))) {
				$object->activeTargets = array();
			}
			foreach ($input['activeTargets'] instanceof \Traversable ? $input['activeTargets'] : (array)$input['activeTargets'] as $k0 => $v0) {
				$object->activeTargets[$k0] = TargetMeta::fromArray($v0, $group, isset($object->activeTargets[$k0]) ? $object->activeTargets[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('activeTargets', $input) && $input['activeTargets'] === null) {
			$object->activeTargets = null;
		}
		if (($id & 2) > 0 && isset($input['activeTargets'])) {
			if (!(isset($object->activeTargets) && is_array($object->activeTargets))) {
				$object->activeTargets = array();
			}
			foreach ($input['activeTargets'] instanceof \Traversable ? $input['activeTargets'] : (array)$input['activeTargets'] as $k0 => $v0) {
				$object->activeTargets[$k0] = TargetMeta::fromArray($v0, $group, isset($object->activeTargets[$k0]) ? $object->activeTargets[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('activeTargets', $input) && $input['activeTargets'] === null) {
			$object->activeTargets = null;
		}

		if (($id & 1) > 0 && isset($input['activeAlertmanagers'])) {
			if (!(isset($object->activeAlertmanagers) && is_array($object->activeAlertmanagers))) {
				$object->activeAlertmanagers = array();
			}
			foreach ($input['activeAlertmanagers'] instanceof \Traversable ? $input['activeAlertmanagers'] : (array)$input['activeAlertmanagers'] as $k0 => $v0) {
				$object->activeAlertmanagers[$k0] = AlertManagerMeta::fromArray($v0, $group, isset($object->activeAlertmanagers[$k0]) ? $object->activeAlertmanagers[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('activeAlertmanagers', $input) && $input['activeAlertmanagers'] === null) {
			$object->activeAlertmanagers = null;
		}
		if (($id & 2) > 0 && isset($input['activeAlertmanagers'])) {
			if (!(isset($object->activeAlertmanagers) && is_array($object->activeAlertmanagers))) {
				$object->activeAlertmanagers = array();
			}
			foreach ($input['activeAlertmanagers'] instanceof \Traversable ? $input['activeAlertmanagers'] : (array)$input['activeAlertmanagers'] as $k0 => $v0) {
				$object->activeAlertmanagers[$k0] = AlertManagerMeta::fromArray($v0, $group, isset($object->activeAlertmanagers[$k0]) ? $object->activeAlertmanagers[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('activeAlertmanagers', $input) && $input['activeAlertmanagers'] === null) {
			$object->activeAlertmanagers = null;
		}

		if (($id & 1) > 0 && isset($input['name'])) {
			$object->name = $input['name'];
		} elseif (($id & 1) > 0 && array_key_exists('name', $input) && $input['name'] === null) {
			$object->name = null;
		}
		if (($id & 2) > 0 && isset($input['name'])) {
			$object->name = $input['name'];
		} elseif (($id & 2) > 0 && array_key_exists('name', $input) && $input['name'] === null) {
			$object->name = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\ResponseData to array
	 *
	 * @param ResponseData $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof ResponseData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ResponseData.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['resultType']))) {
				$output['resultType'] = $object->resultType;
			}
			if (($id & 2) > 0 && ((isset($object->resultType) && $filter === null) || isset($filter['resultType']))) {
				$output['resultType'] = $object->resultType;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['result']))) {
				if (!(isset($output['result']) && is_array($output['result']))) {
					$output['result'] = array();
				}
				foreach ($object->result instanceof \Traversable ? $object->result : (array)$object->result as $k0 => $v0) {
					$output['result'][$k0] = MetricResultMeta::toArray($v0, $group, $filter === null ? null : $filter['result']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->result) && $filter === null) || isset($filter['result']))) {
				if (!(isset($output['result']) && is_array($output['result']))) {
					$output['result'] = array();
				}
				foreach ($object->result instanceof \Traversable ? $object->result : (array)$object->result as $k0 => $v0) {
					$output['result'][$k0] = MetricResultMeta::toArray($v0, $group, $filter === null ? null : $filter['result']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['activeTargets']))) {
				if (!(isset($output['activeTargets']) && is_array($output['activeTargets']))) {
					$output['activeTargets'] = array();
				}
				foreach ($object->activeTargets instanceof \Traversable ? $object->activeTargets : (array)$object->activeTargets as $k0 => $v0) {
					$output['activeTargets'][$k0] = TargetMeta::toArray($v0, $group, $filter === null ? null : $filter['activeTargets']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->activeTargets) && $filter === null) || isset($filter['activeTargets']))) {
				if (!(isset($output['activeTargets']) && is_array($output['activeTargets']))) {
					$output['activeTargets'] = array();
				}
				foreach ($object->activeTargets instanceof \Traversable ? $object->activeTargets : (array)$object->activeTargets as $k0 => $v0) {
					$output['activeTargets'][$k0] = TargetMeta::toArray($v0, $group, $filter === null ? null : $filter['activeTargets']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['activeAlertmanagers']))) {
				if (!(isset($output['activeAlertmanagers']) && is_array($output['activeAlertmanagers']))) {
					$output['activeAlertmanagers'] = array();
				}
				foreach ($object->activeAlertmanagers instanceof \Traversable ? $object->activeAlertmanagers : (array)$object->activeAlertmanagers as $k0 => $v0) {
					$output['activeAlertmanagers'][$k0] = AlertManagerMeta::toArray($v0, $group, $filter === null ? null : $filter['activeAlertmanagers']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->activeAlertmanagers) && $filter === null) || isset($filter['activeAlertmanagers']))) {
				if (!(isset($output['activeAlertmanagers']) && is_array($output['activeAlertmanagers']))) {
					$output['activeAlertmanagers'] = array();
				}
				foreach ($object->activeAlertmanagers instanceof \Traversable ? $object->activeAlertmanagers : (array)$object->activeAlertmanagers as $k0 => $v0) {
					$output['activeAlertmanagers'][$k0] = AlertManagerMeta::toArray($v0, $group, $filter === null ? null : $filter['activeAlertmanagers']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['name']))) {
				$output['name'] = $object->name;
			}
			if (($id & 2) > 0 && ((isset($object->name) && $filter === null) || isset($filter['name']))) {
				$output['name'] = $object->name;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\ResponseData object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param ResponseData $object
	 *
	 * @throws \Exception
	 *
	 * @return ResponseData
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new ResponseData();
		} elseif (!($object instanceof ResponseData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ResponseData.');
		}

		if (($id & 1) > 0 && isset($input['resultType'])) {
			$object->resultType = $input['resultType'];
		} elseif (($id & 1) > 0 && array_key_exists('resultType', $input) && $input['resultType'] === null) {
			$object->resultType = null;
		}
		if (($id & 2) > 0 && isset($input['resultType'])) {
			$object->resultType = $input['resultType'];
		} elseif (($id & 2) > 0 && array_key_exists('resultType', $input) && $input['resultType'] === null) {
			$object->resultType = null;
		}

		if (($id & 1) > 0 && isset($input['result'])) {
			if (!(isset($object->result) && is_array($object->result))) {
				$object->result = array();
			}
			foreach ($input['result'] instanceof \Traversable ? $input['result'] : (array)$input['result'] as $k0 => $v0) {
				$object->result[$k0] = MetricResultMeta::fromObject($v0, $group, isset($object->result[$k0]) ? $object->result[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('result', $input) && $input['result'] === null) {
			$object->result = null;
		}
		if (($id & 2) > 0 && isset($input['result'])) {
			if (!(isset($object->result) && is_array($object->result))) {
				$object->result = array();
			}
			foreach ($input['result'] instanceof \Traversable ? $input['result'] : (array)$input['result'] as $k0 => $v0) {
				$object->result[$k0] = MetricResultMeta::fromObject($v0, $group, isset($object->result[$k0]) ? $object->result[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('result', $input) && $input['result'] === null) {
			$object->result = null;
		}

		if (($id & 1) > 0 && isset($input['activeTargets'])) {
			if (!(isset($object->activeTargets) && is_array($object->activeTargets))) {
				$object->activeTargets = array();
			}
			foreach ($input['activeTargets'] instanceof \Traversable ? $input['activeTargets'] : (array)$input['activeTargets'] as $k0 => $v0) {
				$object->activeTargets[$k0] = TargetMeta::fromObject($v0, $group, isset($object->activeTargets[$k0]) ? $object->activeTargets[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('activeTargets', $input) && $input['activeTargets'] === null) {
			$object->activeTargets = null;
		}
		if (($id & 2) > 0 && isset($input['activeTargets'])) {
			if (!(isset($object->activeTargets) && is_array($object->activeTargets))) {
				$object->activeTargets = array();
			}
			foreach ($input['activeTargets'] instanceof \Traversable ? $input['activeTargets'] : (array)$input['activeTargets'] as $k0 => $v0) {
				$object->activeTargets[$k0] = TargetMeta::fromObject($v0, $group, isset($object->activeTargets[$k0]) ? $object->activeTargets[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('activeTargets', $input) && $input['activeTargets'] === null) {
			$object->activeTargets = null;
		}

		if (($id & 1) > 0 && isset($input['activeAlertmanagers'])) {
			if (!(isset($object->activeAlertmanagers) && is_array($object->activeAlertmanagers))) {
				$object->activeAlertmanagers = array();
			}
			foreach ($input['activeAlertmanagers'] instanceof \Traversable ? $input['activeAlertmanagers'] : (array)$input['activeAlertmanagers'] as $k0 => $v0) {
				$object->activeAlertmanagers[$k0] = AlertManagerMeta::fromObject($v0, $group, isset($object->activeAlertmanagers[$k0]) ? $object->activeAlertmanagers[$k0] : null);
			}
		} elseif (($id & 1) > 0 && array_key_exists('activeAlertmanagers', $input) && $input['activeAlertmanagers'] === null) {
			$object->activeAlertmanagers = null;
		}
		if (($id & 2) > 0 && isset($input['activeAlertmanagers'])) {
			if (!(isset($object->activeAlertmanagers) && is_array($object->activeAlertmanagers))) {
				$object->activeAlertmanagers = array();
			}
			foreach ($input['activeAlertmanagers'] instanceof \Traversable ? $input['activeAlertmanagers'] : (array)$input['activeAlertmanagers'] as $k0 => $v0) {
				$object->activeAlertmanagers[$k0] = AlertManagerMeta::fromObject($v0, $group, isset($object->activeAlertmanagers[$k0]) ? $object->activeAlertmanagers[$k0] : null);
			}
		} elseif (($id & 2) > 0 && array_key_exists('activeAlertmanagers', $input) && $input['activeAlertmanagers'] === null) {
			$object->activeAlertmanagers = null;
		}

		if (($id & 1) > 0 && isset($input['name'])) {
			$object->name = $input['name'];
		} elseif (($id & 1) > 0 && array_key_exists('name', $input) && $input['name'] === null) {
			$object->name = null;
		}
		if (($id & 2) > 0 && isset($input['name'])) {
			$object->name = $input['name'];
		} elseif (($id & 2) > 0 && array_key_exists('name', $input) && $input['name'] === null) {
			$object->name = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\ResponseData to object
	 *
	 * @param ResponseData $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof ResponseData)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\ResponseData.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['resultType']))) {
				$output['resultType'] = $object->resultType;
			}
			if (($id & 2) > 0 && ((isset($object->resultType) && $filter === null) || isset($filter['resultType']))) {
				$output['resultType'] = $object->resultType;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['result']))) {
				if (!(isset($output['result']) && is_array($output['result']))) {
					$output['result'] = array();
				}
				foreach ($object->result instanceof \Traversable ? $object->result : (array)$object->result as $k0 => $v0) {
					$output['result'][$k0] = MetricResultMeta::toObject($v0, $group, $filter === null ? null : $filter['result']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->result) && $filter === null) || isset($filter['result']))) {
				if (!(isset($output['result']) && is_array($output['result']))) {
					$output['result'] = array();
				}
				foreach ($object->result instanceof \Traversable ? $object->result : (array)$object->result as $k0 => $v0) {
					$output['result'][$k0] = MetricResultMeta::toObject($v0, $group, $filter === null ? null : $filter['result']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['activeTargets']))) {
				if (!(isset($output['activeTargets']) && is_array($output['activeTargets']))) {
					$output['activeTargets'] = array();
				}
				foreach ($object->activeTargets instanceof \Traversable ? $object->activeTargets : (array)$object->activeTargets as $k0 => $v0) {
					$output['activeTargets'][$k0] = TargetMeta::toObject($v0, $group, $filter === null ? null : $filter['activeTargets']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->activeTargets) && $filter === null) || isset($filter['activeTargets']))) {
				if (!(isset($output['activeTargets']) && is_array($output['activeTargets']))) {
					$output['activeTargets'] = array();
				}
				foreach ($object->activeTargets instanceof \Traversable ? $object->activeTargets : (array)$object->activeTargets as $k0 => $v0) {
					$output['activeTargets'][$k0] = TargetMeta::toObject($v0, $group, $filter === null ? null : $filter['activeTargets']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['activeAlertmanagers']))) {
				if (!(isset($output['activeAlertmanagers']) && is_array($output['activeAlertmanagers']))) {
					$output['activeAlertmanagers'] = array();
				}
				foreach ($object->activeAlertmanagers instanceof \Traversable ? $object->activeAlertmanagers : (array)$object->activeAlertmanagers as $k0 => $v0) {
					$output['activeAlertmanagers'][$k0] = AlertManagerMeta::toObject($v0, $group, $filter === null ? null : $filter['activeAlertmanagers']);
				}
			}
			if (($id & 2) > 0 && ((isset($object->activeAlertmanagers) && $filter === null) || isset($filter['activeAlertmanagers']))) {
				if (!(isset($output['activeAlertmanagers']) && is_array($output['activeAlertmanagers']))) {
					$output['activeAlertmanagers'] = array();
				}
				foreach ($object->activeAlertmanagers instanceof \Traversable ? $object->activeAlertmanagers : (array)$object->activeAlertmanagers as $k0 => $v0) {
					$output['activeAlertmanagers'][$k0] = AlertManagerMeta::toObject($v0, $group, $filter === null ? null : $filter['activeAlertmanagers']);
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['name']))) {
				$output['name'] = $object->name;
			}
			if (($id & 2) > 0 && ((isset($object->name) && $filter === null) || isset($filter['name']))) {
				$output['name'] = $object->name;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\ResponseData from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param ResponseData $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return ResponseData
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
	 * Serializes \PApi\Response\ResponseData to JSON string
	 *
	 * @param ResponseData $object
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
	 * Serializes \PApi\Response\ResponseData to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param ResponseData $object
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
	 * Serializes \PApi\Response\ResponseData to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param ResponseData $object
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
	 * Creates \PApi\Response\ResponseData from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param ResponseData $object
	 *
	 * @return ResponseData
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (($id & 2) > 0 && isset($input['result']) && is_string($input['result'])) {
			$decoded = json_decode($input['result'], true);
			if ($decoded === null && $input['result'] !== '' && strcasecmp($input['result'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['result'] . '.');
			}
			$input['result'] = $decoded;
		}

		if (($id & 2) > 0 && isset($input['activeTargets']) && is_string($input['activeTargets'])) {
			$decoded = json_decode($input['activeTargets'], true);
			if ($decoded === null && $input['activeTargets'] !== '' && strcasecmp($input['activeTargets'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['activeTargets'] . '.');
			}
			$input['activeTargets'] = $decoded;
		}

		if (($id & 2) > 0 && isset($input['activeAlertmanagers']) && is_string($input['activeAlertmanagers'])) {
			$decoded = json_decode($input['activeAlertmanagers'], true);
			if ($decoded === null && $input['activeAlertmanagers'] !== '' && strcasecmp($input['activeAlertmanagers'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['activeAlertmanagers'] . '.');
			}
			$input['activeAlertmanagers'] = $decoded;
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\ResponseData into array of JSON-serialized strings
	 *
	 * @param ResponseData $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\ResponseData' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		if (($id & 2) > 0 && isset($output['result']) && ($filter === null || isset($filter['result']))) {
			$output['result'] = json_encode($output['result'], $options);
		}

		if (($id & 2) > 0 && isset($output['activeTargets']) && ($filter === null || isset($filter['activeTargets']))) {
			$output['activeTargets'] = json_encode($output['activeTargets'], $options);
		}

		if (($id & 2) > 0 && isset($output['activeAlertmanagers']) && ($filter === null || isset($filter['activeAlertmanagers']))) {
			$output['activeAlertmanagers'] = json_encode($output['activeAlertmanagers'], $options);
		}

		return $output;
	}
}
