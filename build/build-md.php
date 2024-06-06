<?php

namespace Pronamic\IDealIssuers;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Composer runtime.
 * 
 * @link https://getcomposer.org/doc/07-runtime.md
 */
$wp_pay_logos_version = \Composer\InstalledVersions::getVersion( 'pronamic/wp-pay-logos' );
$wp_pay_logos_path    = \realpath( \Composer\InstalledVersions::getInstallPath( 'pronamic/wp-pay-logos' ) );

$ideal_issuer_service = new IDealIssuerService();

$ideal_issuers = $ideal_issuer_service->get_issuers();

echo '| Code | Name | Mollie `32` `×` `24` SVG |', PHP_EOL;
echo '| ---- | ---- | ------------------------ |', PHP_EOL;

foreach ( $ideal_issuers as $ideal_issuer ) {
	echo '| `', $ideal_issuer->code, '` | ', $ideal_issuer->name, ' | ';

	if ( \array_key_exists( 'mollie-32x24.svg', $ideal_issuer->images ) ) {
		$path = $ideal_issuer->images['mollie-32x24.svg'];

		$rel_path = \substr( $path, \strlen( $wp_pay_logos_path ) );

		$url = 'https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0' . $rel_path;

		echo '![', $ideal_issuer->name, '](', $url, ')';
		echo ' |';
	}

	echo PHP_EOL;
}

echo PHP_EOL;
