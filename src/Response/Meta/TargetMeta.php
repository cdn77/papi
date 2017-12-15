<?php
namespace PApi\Response\Meta;

use PApi\Response\Target;
use Skrz\Meta\JSON\JsonMetaInterface;
use Skrz\Meta\MetaInterface;
use Skrz\Meta\PHP\PhpMetaInterface;
use Skrz\Meta\Stack;

/**
 * Meta class for \PApi\Response\Target
 *
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
class TargetMeta extends Target implements MetaInterface, PhpMetaInterface, JsonMetaInterface
{
	const CLASS_NAME = 'PApi\Response\Target';
	const SHORT_NAME = 'Target';
	const ENTITY_NAME = 'target';
	const DISCOVERED_LABELS = 'discoveredLabels';
	const LABELS = 'labels';
	const SCRAPE_URL = 'scrapeUrl';
	const LAST_ERROR = 'lastError';
	const LAST_SCRAPE = 'lastScrape';
	const HEALTH = 'health';

	/** @var TargetMeta */
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
	 * @return TargetMeta
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			new self(); // self::$instance assigned in __construct
		}
		return self::$instance;
	}


	/**
	 * Creates new instance of \PApi\Response\Target
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Target
	 */
	public static function create()
	{
		switch (func_num_args()) {
			case 0:
				return new Target();
			case 1:
				return new Target(func_get_arg(0));
			case 2:
				return new Target(func_get_arg(0), func_get_arg(1));
			case 3:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2));
			case 4:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3));
			case 5:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
			case 6:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5));
			case 7:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6));
			case 8:
				return new Target(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4), func_get_arg(5), func_get_arg(6), func_get_arg(7));
			default:
				throw new \InvalidArgumentException('More than 8 arguments supplied, please be reasonable.');
		}
	}


	/**
	 * Resets properties of \PApi\Response\Target to default values
	 *
	 *
	 * @param Target $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	public static function reset($object)
	{
		if (!($object instanceof Target)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Target.');
		}
		$object->discoveredLabels = NULL;
		$object->labels = NULL;
		$object->scrapeUrl = NULL;
		$object->lastError = NULL;
		$object->lastScrape = NULL;
		$object->health = NULL;
	}


	/**
	 * Computes hash of \PApi\Response\Target
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

		if (isset($object->discoveredLabels)) {
			hash_update($ctx, 'discoveredLabels');
			foreach ($object->discoveredLabels instanceof \Traversable ? $object->discoveredLabels : (array)$object->discoveredLabels as $v0) {
				hash_update($ctx, (string)$v0);
			}
		}

		if (isset($object->labels)) {
			hash_update($ctx, 'labels');
			foreach ($object->labels instanceof \Traversable ? $object->labels : (array)$object->labels as $v0) {
				hash_update($ctx, (string)$v0);
			}
		}

		if (isset($object->scrapeUrl)) {
			hash_update($ctx, 'scrapeUrl');
			hash_update($ctx, (string)$object->scrapeUrl);
		}

		if (isset($object->lastError)) {
			hash_update($ctx, 'lastError');
			hash_update($ctx, $object->lastError instanceof \DateTimeInterface ? $object->lastError->format(\DateTime::ISO8601) : '');
		}

		if (isset($object->lastScrape)) {
			hash_update($ctx, 'lastScrape');
			hash_update($ctx, $object->lastScrape instanceof \DateTimeInterface ? $object->lastScrape->format(\DateTime::ISO8601) : '');
		}

		if (isset($object->health)) {
			hash_update($ctx, 'health');
			hash_update($ctx, (string)$object->health);
		}

		if (is_string($algoOrCtx)) {
			return hash_final($ctx, $raw);
		} else {
			return null;
		}
	}


	/**
	 * Creates \PApi\Response\Target object from array
	 *
	 * @param array $input
	 * @param string $group
	 * @param Target $object
	 *
	 * @throws \Exception
	 *
	 * @return Target
	 */
	public static function fromArray($input, $group = null, $object = null)
	{
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Target();
		} elseif (!($object instanceof Target)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Target.');
		}

		if (($id & 1) > 0 && isset($input['discoveredLabels'])) {
			if (!(isset($object->discoveredLabels) && is_array($object->discoveredLabels))) {
				$object->discoveredLabels = array();
			}
			foreach ($input['discoveredLabels'] instanceof \Traversable ? $input['discoveredLabels'] : (array)$input['discoveredLabels'] as $k0 => $v0) {
				$object->discoveredLabels[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('discoveredLabels', $input) && $input['discoveredLabels'] === null) {
			$object->discoveredLabels = null;
		}
		if (($id & 2) > 0 && isset($input['discoveredLabels'])) {
			if (!(isset($object->discoveredLabels) && is_array($object->discoveredLabels))) {
				$object->discoveredLabels = array();
			}
			foreach ($input['discoveredLabels'] instanceof \Traversable ? $input['discoveredLabels'] : (array)$input['discoveredLabels'] as $k0 => $v0) {
				$object->discoveredLabels[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('discoveredLabels', $input) && $input['discoveredLabels'] === null) {
			$object->discoveredLabels = null;
		}

		if (($id & 1) > 0 && isset($input['labels'])) {
			if (!(isset($object->labels) && is_array($object->labels))) {
				$object->labels = array();
			}
			foreach ($input['labels'] instanceof \Traversable ? $input['labels'] : (array)$input['labels'] as $k0 => $v0) {
				$object->labels[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('labels', $input) && $input['labels'] === null) {
			$object->labels = null;
		}
		if (($id & 2) > 0 && isset($input['labels'])) {
			if (!(isset($object->labels) && is_array($object->labels))) {
				$object->labels = array();
			}
			foreach ($input['labels'] instanceof \Traversable ? $input['labels'] : (array)$input['labels'] as $k0 => $v0) {
				$object->labels[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('labels', $input) && $input['labels'] === null) {
			$object->labels = null;
		}

		if (($id & 1) > 0 && isset($input['scrapeUrl'])) {
			$object->scrapeUrl = $input['scrapeUrl'];
		} elseif (($id & 1) > 0 && array_key_exists('scrapeUrl', $input) && $input['scrapeUrl'] === null) {
			$object->scrapeUrl = null;
		}
		if (($id & 2) > 0 && isset($input['scrapeUrl'])) {
			$object->scrapeUrl = $input['scrapeUrl'];
		} elseif (($id & 2) > 0 && array_key_exists('scrapeUrl', $input) && $input['scrapeUrl'] === null) {
			$object->scrapeUrl = null;
		}

		if (($id & 1) > 0 && isset($input['lastError'])) {
			if ($input['lastError'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastError'];
			} elseif (is_numeric($input['lastError'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastError']));
			} elseif (is_string($input['lastError'])) {
				if ($input['lastError'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastError']);
				}
			} elseif (is_array($input['lastError']) && isset($input['lastError']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastError']['date']);
			} elseif ($input['lastError'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastError = $datetimeInstanceReturn;
		} elseif (($id & 1) > 0 && array_key_exists('lastError', $input) && $input['lastError'] === null) {
			$object->lastError = null;
		}
		if (($id & 2) > 0 && isset($input['lastError'])) {
			if ($input['lastError'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastError'];
			} elseif (is_numeric($input['lastError'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastError']));
			} elseif (is_string($input['lastError'])) {
				if ($input['lastError'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastError']);
				}
			} elseif (is_array($input['lastError']) && isset($input['lastError']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastError']['date']);
			} elseif ($input['lastError'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastError = $datetimeInstanceReturn;
		} elseif (($id & 2) > 0 && array_key_exists('lastError', $input) && $input['lastError'] === null) {
			$object->lastError = null;
		}

		if (($id & 1) > 0 && isset($input['lastScrape'])) {
			if ($input['lastScrape'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastScrape'];
			} elseif (is_numeric($input['lastScrape'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastScrape']));
			} elseif (is_string($input['lastScrape'])) {
				if ($input['lastScrape'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastScrape']);
				}
			} elseif (is_array($input['lastScrape']) && isset($input['lastScrape']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastScrape']['date']);
			} elseif ($input['lastScrape'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastScrape = $datetimeInstanceReturn;
		} elseif (($id & 1) > 0 && array_key_exists('lastScrape', $input) && $input['lastScrape'] === null) {
			$object->lastScrape = null;
		}
		if (($id & 2) > 0 && isset($input['lastScrape'])) {
			if ($input['lastScrape'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastScrape'];
			} elseif (is_numeric($input['lastScrape'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastScrape']));
			} elseif (is_string($input['lastScrape'])) {
				if ($input['lastScrape'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastScrape']);
				}
			} elseif (is_array($input['lastScrape']) && isset($input['lastScrape']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastScrape']['date']);
			} elseif ($input['lastScrape'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastScrape = $datetimeInstanceReturn;
		} elseif (($id & 2) > 0 && array_key_exists('lastScrape', $input) && $input['lastScrape'] === null) {
			$object->lastScrape = null;
		}

		if (($id & 1) > 0 && isset($input['health'])) {
			$object->health = $input['health'];
		} elseif (($id & 1) > 0 && array_key_exists('health', $input) && $input['health'] === null) {
			$object->health = null;
		}
		if (($id & 2) > 0 && isset($input['health'])) {
			$object->health = $input['health'];
		} elseif (($id & 2) > 0 && array_key_exists('health', $input) && $input['health'] === null) {
			$object->health = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\Target to array
	 *
	 * @param Target $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Target)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Target.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['discoveredLabels']))) {
				if (!(isset($output['discoveredLabels']) && is_array($output['discoveredLabels']))) {
					$output['discoveredLabels'] = array();
				}
				foreach ($object->discoveredLabels instanceof \Traversable ? $object->discoveredLabels : (array)$object->discoveredLabels as $k0 => $v0) {
					$output['discoveredLabels'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->discoveredLabels) && $filter === null) || isset($filter['discoveredLabels']))) {
				if (!(isset($output['discoveredLabels']) && is_array($output['discoveredLabels']))) {
					$output['discoveredLabels'] = array();
				}
				foreach ($object->discoveredLabels instanceof \Traversable ? $object->discoveredLabels : (array)$object->discoveredLabels as $k0 => $v0) {
					$output['discoveredLabels'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['labels']))) {
				if (!(isset($output['labels']) && is_array($output['labels']))) {
					$output['labels'] = array();
				}
				foreach ($object->labels instanceof \Traversable ? $object->labels : (array)$object->labels as $k0 => $v0) {
					$output['labels'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->labels) && $filter === null) || isset($filter['labels']))) {
				if (!(isset($output['labels']) && is_array($output['labels']))) {
					$output['labels'] = array();
				}
				foreach ($object->labels instanceof \Traversable ? $object->labels : (array)$object->labels as $k0 => $v0) {
					$output['labels'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['scrapeUrl']))) {
				$output['scrapeUrl'] = $object->scrapeUrl;
			}
			if (($id & 2) > 0 && ((isset($object->scrapeUrl) && $filter === null) || isset($filter['scrapeUrl']))) {
				$output['scrapeUrl'] = $object->scrapeUrl;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['lastError']))) {
				if ($object->lastError === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastError instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastError->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastError)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastError) && isset($object->lastError['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastError'] = $datetimeStringReturn;
			}
			if (($id & 2) > 0 && ((isset($object->lastError) && $filter === null) || isset($filter['lastError']))) {
				if ($object->lastError === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastError instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastError->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastError)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastError) && isset($object->lastError['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastError'] = $datetimeStringReturn;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['lastScrape']))) {
				if ($object->lastScrape === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastScrape instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastScrape->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastScrape)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastScrape) && isset($object->lastScrape['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastScrape'] = $datetimeStringReturn;
			}
			if (($id & 2) > 0 && ((isset($object->lastScrape) && $filter === null) || isset($filter['lastScrape']))) {
				if ($object->lastScrape === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastScrape instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastScrape->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastScrape)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastScrape) && isset($object->lastScrape['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastScrape'] = $datetimeStringReturn;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['health']))) {
				$output['health'] = $object->health;
			}
			if (($id & 2) > 0 && ((isset($object->health) && $filter === null) || isset($filter['health']))) {
				$output['health'] = $object->health;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return $output;
	}


	/**
	 * Creates \PApi\Response\Target object from object
	 *
	 * @param object $input
	 * @param string $group
	 * @param Target $object
	 *
	 * @throws \Exception
	 *
	 * @return Target
	 */
	public static function fromObject($input, $group = null, $object = null)
	{
		$input = (array)$input;

		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if ($object === null) {
			$object = new Target();
		} elseif (!($object instanceof Target)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Target.');
		}

		if (($id & 1) > 0 && isset($input['discoveredLabels'])) {
			if (!(isset($object->discoveredLabels) && is_array($object->discoveredLabels))) {
				$object->discoveredLabels = array();
			}
			foreach ($input['discoveredLabels'] instanceof \Traversable ? $input['discoveredLabels'] : (array)$input['discoveredLabels'] as $k0 => $v0) {
				$object->discoveredLabels[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('discoveredLabels', $input) && $input['discoveredLabels'] === null) {
			$object->discoveredLabels = null;
		}
		if (($id & 2) > 0 && isset($input['discoveredLabels'])) {
			if (!(isset($object->discoveredLabels) && is_array($object->discoveredLabels))) {
				$object->discoveredLabels = array();
			}
			foreach ($input['discoveredLabels'] instanceof \Traversable ? $input['discoveredLabels'] : (array)$input['discoveredLabels'] as $k0 => $v0) {
				$object->discoveredLabels[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('discoveredLabels', $input) && $input['discoveredLabels'] === null) {
			$object->discoveredLabels = null;
		}

		if (($id & 1) > 0 && isset($input['labels'])) {
			if (!(isset($object->labels) && is_array($object->labels))) {
				$object->labels = array();
			}
			foreach ($input['labels'] instanceof \Traversable ? $input['labels'] : (array)$input['labels'] as $k0 => $v0) {
				$object->labels[$k0] = $v0;
			}
		} elseif (($id & 1) > 0 && array_key_exists('labels', $input) && $input['labels'] === null) {
			$object->labels = null;
		}
		if (($id & 2) > 0 && isset($input['labels'])) {
			if (!(isset($object->labels) && is_array($object->labels))) {
				$object->labels = array();
			}
			foreach ($input['labels'] instanceof \Traversable ? $input['labels'] : (array)$input['labels'] as $k0 => $v0) {
				$object->labels[$k0] = $v0;
			}
		} elseif (($id & 2) > 0 && array_key_exists('labels', $input) && $input['labels'] === null) {
			$object->labels = null;
		}

		if (($id & 1) > 0 && isset($input['scrapeUrl'])) {
			$object->scrapeUrl = $input['scrapeUrl'];
		} elseif (($id & 1) > 0 && array_key_exists('scrapeUrl', $input) && $input['scrapeUrl'] === null) {
			$object->scrapeUrl = null;
		}
		if (($id & 2) > 0 && isset($input['scrapeUrl'])) {
			$object->scrapeUrl = $input['scrapeUrl'];
		} elseif (($id & 2) > 0 && array_key_exists('scrapeUrl', $input) && $input['scrapeUrl'] === null) {
			$object->scrapeUrl = null;
		}

		if (($id & 1) > 0 && isset($input['lastError'])) {
			if ($input['lastError'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastError'];
			} elseif (is_numeric($input['lastError'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastError']));
			} elseif (is_string($input['lastError'])) {
				if ($input['lastError'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastError']);
				}
			} elseif (is_array($input['lastError']) && isset($input['lastError']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastError']['date']);
			} elseif ($input['lastError'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastError = $datetimeInstanceReturn;
		} elseif (($id & 1) > 0 && array_key_exists('lastError', $input) && $input['lastError'] === null) {
			$object->lastError = null;
		}
		if (($id & 2) > 0 && isset($input['lastError'])) {
			if ($input['lastError'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastError'];
			} elseif (is_numeric($input['lastError'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastError']));
			} elseif (is_string($input['lastError'])) {
				if ($input['lastError'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastError']);
				}
			} elseif (is_array($input['lastError']) && isset($input['lastError']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastError']['date']);
			} elseif ($input['lastError'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastError = $datetimeInstanceReturn;
		} elseif (($id & 2) > 0 && array_key_exists('lastError', $input) && $input['lastError'] === null) {
			$object->lastError = null;
		}

		if (($id & 1) > 0 && isset($input['lastScrape'])) {
			if ($input['lastScrape'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastScrape'];
			} elseif (is_numeric($input['lastScrape'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastScrape']));
			} elseif (is_string($input['lastScrape'])) {
				if ($input['lastScrape'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastScrape']);
				}
			} elseif (is_array($input['lastScrape']) && isset($input['lastScrape']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastScrape']['date']);
			} elseif ($input['lastScrape'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastScrape = $datetimeInstanceReturn;
		} elseif (($id & 1) > 0 && array_key_exists('lastScrape', $input) && $input['lastScrape'] === null) {
			$object->lastScrape = null;
		}
		if (($id & 2) > 0 && isset($input['lastScrape'])) {
			if ($input['lastScrape'] instanceof \DateTimeInterface) {
				$datetimeInstanceReturn = $input['lastScrape'];
			} elseif (is_numeric($input['lastScrape'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable('@' . intval($input['lastScrape']));
			} elseif (is_string($input['lastScrape'])) {
				if ($input['lastScrape'] === '0001-01-01T00:00:00Z') {
					$datetimeInstanceReturn = null;
				} else {
					$datetimeInstanceReturn = \DateTimeImmutable::createFromFormat('Y-m-d\\TH:i:s.u???P', $input['lastScrape']);
				}
			} elseif (is_array($input['lastScrape']) && isset($input['lastScrape']['date'])) {
				$datetimeInstanceReturn = new \DateTimeImmutable($input['lastScrape']['date']);
			} elseif ($input['lastScrape'] === null) {
				$datetimeInstanceReturn = null;
			} else {
				throw new \InvalidArgumentException('Could not deserialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
			}
			$object->lastScrape = $datetimeInstanceReturn;
		} elseif (($id & 2) > 0 && array_key_exists('lastScrape', $input) && $input['lastScrape'] === null) {
			$object->lastScrape = null;
		}

		if (($id & 1) > 0 && isset($input['health'])) {
			$object->health = $input['health'];
		} elseif (($id & 1) > 0 && array_key_exists('health', $input) && $input['health'] === null) {
			$object->health = null;
		}
		if (($id & 2) > 0 && isset($input['health'])) {
			$object->health = $input['health'];
		} elseif (($id & 2) > 0 && array_key_exists('health', $input) && $input['health'] === null) {
			$object->health = null;
		}

		return $object;
	}


	/**
	 * Serializes \PApi\Response\Target to object
	 *
	 * @param Target $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (!($object instanceof Target)) {
			throw new \InvalidArgumentException('You have to pass object of class PApi\Response\Target.');
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

			if (($id & 1) > 0 && ($filter === null || isset($filter['discoveredLabels']))) {
				if (!(isset($output['discoveredLabels']) && is_array($output['discoveredLabels']))) {
					$output['discoveredLabels'] = array();
				}
				foreach ($object->discoveredLabels instanceof \Traversable ? $object->discoveredLabels : (array)$object->discoveredLabels as $k0 => $v0) {
					$output['discoveredLabels'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->discoveredLabels) && $filter === null) || isset($filter['discoveredLabels']))) {
				if (!(isset($output['discoveredLabels']) && is_array($output['discoveredLabels']))) {
					$output['discoveredLabels'] = array();
				}
				foreach ($object->discoveredLabels instanceof \Traversable ? $object->discoveredLabels : (array)$object->discoveredLabels as $k0 => $v0) {
					$output['discoveredLabels'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['labels']))) {
				if (!(isset($output['labels']) && is_array($output['labels']))) {
					$output['labels'] = array();
				}
				foreach ($object->labels instanceof \Traversable ? $object->labels : (array)$object->labels as $k0 => $v0) {
					$output['labels'][$k0] = $v0;
				}
			}
			if (($id & 2) > 0 && ((isset($object->labels) && $filter === null) || isset($filter['labels']))) {
				if (!(isset($output['labels']) && is_array($output['labels']))) {
					$output['labels'] = array();
				}
				foreach ($object->labels instanceof \Traversable ? $object->labels : (array)$object->labels as $k0 => $v0) {
					$output['labels'][$k0] = $v0;
				}
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['scrapeUrl']))) {
				$output['scrapeUrl'] = $object->scrapeUrl;
			}
			if (($id & 2) > 0 && ((isset($object->scrapeUrl) && $filter === null) || isset($filter['scrapeUrl']))) {
				$output['scrapeUrl'] = $object->scrapeUrl;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['lastError']))) {
				if ($object->lastError === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastError instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastError->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastError)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastError) && isset($object->lastError['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastError'] = $datetimeStringReturn;
			}
			if (($id & 2) > 0 && ((isset($object->lastError) && $filter === null) || isset($filter['lastError']))) {
				if ($object->lastError === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastError instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastError->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastError)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastError)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastError) && isset($object->lastError['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastError['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastError'] = $datetimeStringReturn;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['lastScrape']))) {
				if ($object->lastScrape === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastScrape instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastScrape->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastScrape)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastScrape) && isset($object->lastScrape['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastScrape'] = $datetimeStringReturn;
			}
			if (($id & 2) > 0 && ((isset($object->lastScrape) && $filter === null) || isset($filter['lastScrape']))) {
				if ($object->lastScrape === null) {
					$datetimeStringReturn = null;
				} elseif ($object->lastScrape instanceof \DateTimeInterface) {
					$datetimeStringReturn = $object->lastScrape->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_numeric($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable('@' . intval($object->lastScrape)))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_string($object->lastScrape)) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape))->format('Y-m-d\\TH:i:s.u???P');
				} elseif (is_array($object->lastScrape) && isset($object->lastScrape['date'])) {
					$datetimeStringReturn = (new \DateTimeImmutable($object->lastScrape['date']))->format('Y-m-d\\TH:i:s.u???P');
				} else {
					throw new \InvalidArgumentException('Could not serialize date of format ' . 'Y-m-d\\TH:i:s.u???P' . '.');
				}
				$output['lastScrape'] = $datetimeStringReturn;
			}

			if (($id & 1) > 0 && ($filter === null || isset($filter['health']))) {
				$output['health'] = $object->health;
			}
			if (($id & 2) > 0 && ((isset($object->health) && $filter === null) || isset($filter['health']))) {
				$output['health'] = $object->health;
			}

		} catch (\Exception $e) {
			Stack::$objects->detach($object);
			throw $e;
		}

		Stack::$objects->detach($object);
		return (object)$output;
	}


	/**
	 * Creates \PApi\Response\Target from JSON array / JSON serialized string
	 *
	 * @param array|string $json
	 * @param string $group
	 * @param Target $object
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return Target
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
	 * Serializes \PApi\Response\Target to JSON string
	 *
	 * @param Target $object
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
	 * Serializes \PApi\Response\Target to JSON string (only for BC, TO BE REMOVED)
	 *
	 * @param Target $object
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
	 * Serializes \PApi\Response\Target to JSON pretty string (only for BC, TO BE REMOVED)
	 *
	 * @param Target $object
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
	 * Creates \PApi\Response\Target from array of JSON-serialized properties
	 *
	 * @param array $input
	 * @param string $group
	 * @param Target $object
	 *
	 * @return Target
	 */
	public static function fromArrayOfJson($input, $group = null, $object = null)
	{
		$group = 'json:' . $group;
		if (!isset(self::$groups[$group])) {
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		if (($id & 2) > 0 && isset($input['discoveredLabels']) && is_string($input['discoveredLabels'])) {
			$decoded = json_decode($input['discoveredLabels'], true);
			if ($decoded === null && $input['discoveredLabels'] !== '' && strcasecmp($input['discoveredLabels'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['discoveredLabels'] . '.');
			}
			$input['discoveredLabels'] = $decoded;
		}

		if (($id & 2) > 0 && isset($input['labels']) && is_string($input['labels'])) {
			$decoded = json_decode($input['labels'], true);
			if ($decoded === null && $input['labels'] !== '' && strcasecmp($input['labels'], 'null')) {
				throw new \InvalidArgumentException('Could not decode given JSON: ' . $input['labels'] . '.');
			}
			$input['labels'] = $decoded;
		}

		/** @var object $input */
		return self::fromObject($input, $group, $object);
	}


	/**
	 * Transforms \PApi\Response\Target into array of JSON-serialized strings
	 *
	 * @param Target $object
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
			throw new \InvalidArgumentException('Group \'' . $group . '\' not supported for ' . 'PApi\\Response\\Target' . '.');
		} else {
			$id = self::$groups[$group];
		}

		$output = (array)self::toObject($object, $group, $filter);

		if (($id & 2) > 0 && isset($output['discoveredLabels']) && ($filter === null || isset($filter['discoveredLabels']))) {
			$output['discoveredLabels'] = json_encode($output['discoveredLabels'], $options);
		}

		if (($id & 2) > 0 && isset($output['labels']) && ($filter === null || isset($filter['labels']))) {
			$output['labels'] = json_encode($output['labels'], $options);
		}

		return $output;
	}
}
