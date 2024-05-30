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

		$codes = [
			IDealIssuerCode::ABNANL2A,
			IDealIssuerCode::ASNBNL21,
			IDealIssuerCode::BUNQNL2A,
			IDealIssuerCode::INGBNL2A,
			IDealIssuerCode::KNABNL2H,
			IDealIssuerCode::NTSBDEB1,
			IDealIssuerCode::NNBANL2G,
			IDealIssuerCode::RABONL2U,
			IDealIssuerCode::RBRBNL21,
			IDealIssuerCode::REVOLT21,
			IDealIssuerCode::SNSBNL2A,
			IDealIssuerCode::TRIONL2U,
			IDealIssuerCode::FVLBNL22,
			IDealIssuerCode::BITSNL2A,
		];

		foreach ( $codes as $code ) {
			$issuers->items[] = new IDealIssuer( $code->value, $code->name() );
		}

		return $issuers;
	}
}
