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
	'ideal-hub-40x40.svg' => (object) [
		'label'          => 'iDEAL Hub SVG',
		'width'          => 40,
		'height'         => 40,
		'display_width'  => 40,
		'display_height' => 40,
	],
	'mollie-32x24.svg'    => (object) [
		'label'          => 'Mollie SVG',
		'width'          => 32,
		'height'         => 24,
		'display_width'  => 32,
		'display_height' => 24,
	],
	'icon-512x512.svg'    => (object) [
		'label'          => 'Pronamic SVG',
		'width'          => 512,
		'height'         => 512,
		'display_width'  => 32,
		'display_height' => 32,
	],
	'640x360.svg'         => (object) [
		'label'          => 'Pronamic SVG',
		'width'          => 640,
		'height'         => 360,
		'display_width'  => 64,
		'display_height' => 36,
	],
];

$headings = [
	'Code',
	'Name',
];

foreach ( $image_variations as $key => $image_variation ) {
	$headings[] = \sprintf(
		'%s<br>`%s` `×` `%s`',
		$image_variation->label,
		$image_variation->width,
		$image_variation->height,
	);
}

echo '| ', implode( ' | ', $headings ), ' |', PHP_EOL;
echo '| ', implode( ' | ', \array_fill( 0, \count( $headings ), '---' ) ), ' |', PHP_EOL;

foreach ( $ideal_issuers as $ideal_issuer ) {
	$columns = [
		'`' . $ideal_issuer->code . '`',
		$ideal_issuer->name,
	];

	foreach ( $image_variations as $key => $image_variation ) {
		$column = '';

		if ( \array_key_exists( $key, $ideal_issuer->images ) ) {
			$path = $ideal_issuer->images[ $key ];

			$rel_path = \substr( $path, \strlen( $wp_pay_logos_path ) );

			$url = 'https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0' . $rel_path;

			$url = 'https://raw.github.com/pronamic/wp-pay-logos/main' . $rel_path;

			$column = \sprintf(
				'<img src="%s" width="%s" height="%s" alt="%s">',
				$url,
				$image_variation->display_width,
				$image_variation->display_height,
				$image_variation->label
			);
		}

		$columns[] = $column;
	}

	echo '| ', implode( ' | ', $columns ), ' |', PHP_EOL;
}

echo PHP_EOL;
