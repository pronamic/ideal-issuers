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

$image_variations = [
	'ideal-hub-40x40.svg' => 'Mollie SVG<br>`32` `×` `24`',
	'mollie-32x24.svg'    => 'iDEAL Hub SVG<br>`40` `×` `40`',
];

$headings = [
	'Code',
	'Name',
];

foreach ( $image_variations as $key => $label ) {
	$headings[] = $label;
}

echo '| ', implode( ' | ', $headings ), ' |', PHP_EOL;
echo '| ', implode( ' | ', \array_fill( 0, \count( $headings ), '---' ) ), ' |', PHP_EOL;

foreach ( $ideal_issuers as $ideal_issuer ) {
	$columns = [
		'`' . $ideal_issuer->code . '`',
		$ideal_issuer->name,
	];

	foreach ( $image_variations as $key => $label ) {
		$column = '';

		if ( \array_key_exists( $key, $ideal_issuer->images ) ) {
			$path = $ideal_issuer->images[ $key ];

			$rel_path = \substr( $path, \strlen( $wp_pay_logos_path ) );

			$url = 'https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0' . $rel_path;

			$url = 'https://raw.github.com/pronamic/wp-pay-logos/main' . $rel_path;

			$column = '![' . $ideal_issuer->name . '](' . $url . ')';
		}

		$columns[] = $column;
	}

	echo '| ', implode( ' | ', $columns ), ' |', PHP_EOL;
}

echo PHP_EOL;
