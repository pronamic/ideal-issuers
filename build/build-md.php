<?php

namespace Pronamic\IDealIssuers;

require __DIR__ . '/../vendor/autoload.php';

$ideal_issuer_service = new IDealIssuerService();

$ideal_issuers = $ideal_issuer_service->get_issuers();

echo '| Code | Name |', PHP_EOL;
echo '| ---- | ---- |', PHP_EOL;

foreach ( $ideal_issuers as $ideal_issuer ) {
	echo '| `', $ideal_issuer->code, '` | ', $ideal_issuer->name, ' |', PHP_EOL;
}

echo PHP_EOL;
