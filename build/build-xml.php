<?php

namespace Pronamic\IDealIssuers;

use DOMDocument;

require __DIR__ . '/../vendor/autoload.php';

$ideal_issuer_service = new IDealIssuerService();

$ideal_issuers = $ideal_issuer_service->get_issuers();

$document = new DOMDocument( '1.0', 'UTF-8' );

$document->preserveWhiteSpace = false;
$document->formatOutput       = true;

$element_issuers = $document->createElement( 'issuers' );

$document->appendChild( $element_issuers );

foreach ( $ideal_issuers as $ideal_issuer ) {
	$element_issuer = $document->createElement( 'issuer' );

	$element_issuers->appendChild( $element_issuer );

	$element_code = $document->createElement( 'code', $ideal_issuer->code );

	$element_issuer->appendChild( $element_code );

	$element_name = $document->createElement( 'name', $ideal_issuer->name );

	$element_issuer->appendChild( $element_name );
}

echo $document->saveXML();
