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
 * 
 * @phpstan-implements IteratorAggregate<string, IDealIssuer>
 */
final class IDealIssuers implements Countable, IteratorAggregate, JsonSerializable {
	/**
	 * Code.
	 *
	 * @var array<string, IDealIssuer>
	 */
	public array $items = [];

	/**
	 * Count.
	 * 
	 * @return int
	 */
	public function count(): int {
		return \count( $this->items );
	}

	/**
	 * Get iterator.
	 * 
	 * @return ArrayIterator<string, IDealIssuer>
	 */
	public function getIterator(): Traversable {
		return new ArrayIterator( $this->items );
	}

	/**
	 * JSON serialize.
	 *
	 * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return IDealIssuer[]
	 */
	public function jsonSerialize(): array {
		return \array_values( $this->items );
	}
}
