<?php
/**
 * The iDEAL issuer service
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\IDealIssuers;

use Pronamic\WpPayLogos\ImageService;

/**
 * The iDEAL issuer service class
 */
final class IDealIssuerService {
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
			$issuers->items[ $code->value ] = new IDealIssuer( $code->value, $code->name() );
		}

		if ( \class_exists( ImageService::class ) ) {
			$image_service = new ImageService();

			$variations = [
				'640x360.svg',
				'icon-512x512.svg',
				'ideal-hub-40x40.svg',
				'mollie-32x24.svg',
			];

			$slugs = [
				IDealIssuerCode::ABNANL2A->value => 'abn-amro',
				IDealIssuerCode::ASNBNL21->value => 'asn-bank',
				IDealIssuerCode::BUNQNL2A->value => 'bunq',
				IDealIssuerCode::INGBNL2A->value => 'ing',
				IDealIssuerCode::KNABNL2H->value => 'knab',
				IDealIssuerCode::NTSBDEB1->value => 'n26',
				IDealIssuerCode::NNBANL2G->value => 'nn',
				IDealIssuerCode::RABONL2U->value => 'rabobank',
				IDealIssuerCode::RBRBNL21->value => 'regiobank',
				IDealIssuerCode::REVOLT21->value => 'revolut',
				IDealIssuerCode::SNSBNL2A->value => 'sns',
				IDealIssuerCode::TRIONL2U->value => 'triodos-bank',
				IDealIssuerCode::FVLBNL22->value => 'van-lanschot-kempen',
				IDealIssuerCode::BITSNL2A->value => 'yoursafe',
			];

			foreach ( $issuers as $issuer ) {
				$slug = $slugs[ $issuer->code ];

				foreach ( $variations as $variation ) {
					$path = $image_service->get_path( "ideal-issuers/$slug/ideal-issuer-$slug-$variation" );

					if ( \is_readable( $path ) ) {
						$issuer->images[ $variation ] = $path;
					}
				}
			}
		}

		return $issuers;
	}
}
