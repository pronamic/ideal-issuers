<?php
/**
 * The iDEAL issuer service
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\IdealIssuers;

/**
 * The iDEAL issuer service class
 */
class IDealIssuerService {
	/**
	 * Get issuers.
	 * 
	 * @return IDealIssuers
	 */
	public function get_issuers() {
		$issuers = new IDealIssuers();

		foreach ( IDealIssuerCode::cases() as $ideal_issuer_code ) {
			$issuers->items[] = new IDealIssuer( $ideal_issuer_code->value, $ideal_issuer_code->name() );
		}

		return $issuers;
	}
}
