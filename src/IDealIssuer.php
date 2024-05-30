<?php
/**
 * The iDEAL issuer
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\IDealIssuers;

use JsonSerializable;

/**
 * The iDEAL issuer class
 */
final class IDealIssuer implements JsonSerializable {
	/**
	 * Code.
	 *
	 * @var string
	 */
	public string $code;

	/**
	 * Name.
	 *
	 * @var string
	 */
	public string $name;

	/**
	 * Images.
	 * 
	 * @var array<string, string>
	 */
	public $images = [];

	/**
	 * Construct an iDEAL issuer.
	 *
	 * @param string $code Code.
	 * @param string $name Name.
	 */
	public function __construct( $code, $name ) {
		$this->code = $code;
		$this->name = $name;
	}

	/**
	 * JSON serialize.
	 *
	 * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return object
	 */
	public function jsonSerialize(): object {
		return (object) [
			'code' => $this->code,
			'name' => $this->name,
		];
	}
}
