<?php
/**
 * The iDEAL issuer code
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\IDealIssuers;

/**
 * The iDEAL issuer code enum
 */
enum IDealIssuerCode: string {
	/**
	 * ABN AMRO.
	 *
	 * @var string
	 */
	case ABNANL2A = 'ABNANL2A';

	/**
	 * ASN Bank.
	 *
	 * @var string
	 */
	case ASNBNL21 = 'ASNBNL21';

	/**
	 * Code for bunq.
	 *
	 * @var string
	 */
	case BUNQNL2A = 'BUNQNL2A';

	/**
	 * ING.
	 *
	 * @var string
	 */
	case INGBNL2A = 'INGBNL2A';

	/**
	 * Knab.
	 *
	 * @var string
	 */
	case KNABNL2H = 'KNABNL2H';

	/**
	 * N26.
	 *
	 * @var string
	 */
	case NTSBDEB1 = 'NTSBDEB1';

	/**
	 * Nationale Nederlanden.
	 *
	 * @var string
	 */
	case NNBANL2G = 'NNBANL2G';

	/**
	 * Rabobank.
	 * 
	 * @var string
	 */
	case RABONL2U = 'RABONL2U';

	/**
	 * RegioBank
	 * 
	 * @var string
	 */
	case RBRBNL21 = 'RBRBNL21';

	/**
	 * Revolut.
	 * 
	 * @var string
	 */
	case REVOLT21 = 'REVOLT21';

	/**
	 * SNS Bank.
	 * 
	 * @var string
	 */
	case SNSBNL2A = 'SNSBNL2A';

	/**
	 * Triodos Bank.
	 * 
	 * @var string
	 */
	case TRIONL2U = 'TRIONL2U';

	/**
	 * Van Lanschot.
	 * 
	 * @var string
	 */
	case FVLBNL22 = 'FVLBNL22';

	/**
	 * Code for yoursafe.
	 * 
	 * @var string
	 */
	case BITSNL2A = 'BITSNL2A';

	/**
	 * Code for testing.
	 * 
	 * @var string
	 */
	case TESTNL2A = 'TESTNL2A';

	/**
	 * Name.
	 * 
	 * @return string
	 */
	public function name(): string {
		return match ( $this ) {
			IDealIssuerCode::ABNANL2A => 'ABN AMRO',
			IDealIssuerCode::ASNBNL21 => 'ASN Bank',
			IDealIssuerCode::BUNQNL2A => 'bunq',
			IDealIssuerCode::INGBNL2A => 'ING',
			IDealIssuerCode::KNABNL2H => 'Knab',
			IDealIssuerCode::NTSBDEB1 => 'N26',
			IDealIssuerCode::NNBANL2G => 'Nationale Nederlanden',
			IDealIssuerCode::RABONL2U => 'Rabobank',
			IDealIssuerCode::RBRBNL21 => 'RegioBank',
			IDealIssuerCode::REVOLT21 => 'Revolut',
			IDealIssuerCode::SNSBNL2A => 'SNS Bank',
			IDealIssuerCode::TRIONL2U => 'Triodos Bank',
			IDealIssuerCode::FVLBNL22 => 'Van Lanschot',
			IDealIssuerCode::BITSNL2A => 'yoursafe',
			IDealIssuerCode::TESTNL2A => 'Test',
		};
	}
}
