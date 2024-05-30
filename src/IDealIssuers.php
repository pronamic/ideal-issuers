<?php
/**
 * The iDEAL issuers
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\IDealIssuers;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;
use Traversable;

/**
 * The iDEAL issuers class
 */
class IDealIssuers implements Countable, IteratorAggregate, JsonSerializable {
	/**
	 * Code.
	 *
	 * @var IDealIssuer[]
	 */
	public array $items = [];

	/**
	 * Count.
	 * 
	 * @return int
	 */
	public function count() {
		return \count( $this->items );
	}

	/**
	 * Get iterator.
	 * 
	 * @return ArrayIterator
	 */
	public function getIterator(): Traversable {
		return new ArrayIterator( $this->items );
	}

	/**
	 * JSON serialize.
	 *
	 * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return array
	 */
	public function jsonSerialize(): array {
		return $this->items;
	}
}