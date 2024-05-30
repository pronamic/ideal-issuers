<?php

namespace Pronamic\IdealIssuers;

require __DIR__ . '/../vendor/autoload.php';

$ideal_issuer_service = new IDealIssuerService();

$ideal_issuers = $ideal_issuer_service->get_issuers();

echo json_encode( $ideal_issuers, JSON_PRETTY_PRINT );
