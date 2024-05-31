# Pronamic iDEAL issuers

## Usage

```php
use Pronamic\IDealIssuers\IDealIssuerService;

$ideal_issuer_service = new IDealIssuerService();

$ideal_issuers = $ideal_issuer_service->get_issuers();

foreach ( $ideal_issuers as $ideal_issuer ) {
	echo $ideal_issuer->code, PHP_EOL;
}
```

## List

| Code | Name |
| ---- | ---- |
| `ABNANL2A` | ABN AMRO |
| `ASNBNL21` | ASN Bank |
| `BUNQNL2A` | bunq |
| `INGBNL2A` | ING |
| `KNABNL2H` | Knab |
| `NTSBDEB1` | N26 |
| `NNBANL2G` | Nationale Nederlanden |
| `RABONL2U` | Rabobank |
| `RBRBNL21` | RegioBank |
| `REVOLT21` | Revolut |
| `SNSBNL2A` | SNS Bank |
| `TRIONL2U` | Triodos Bank |
| `FVLBNL22` | Van Lanschot |
| `BITSNL2A` | yoursafe |

## Ideas

- Publish to NPM.
- GitHub action to check https://beschikbaarheid.ideal.nl/.
- Example of HTML select.
- https://pronamic.github.io/ideal-issuers/
- JSON schema.
- https://select2.org/dropdown
- Add icons / logo's / images.
	- Use resources from https://pay.ideal.nl/?
- Examples of iDEAL issuer select/choice fileds in the wild.
	- Bol.com
	- Amazon
	- Coolblue
	- Albert Heijn
	- Zalando
	- wehkamp
	- Jumbo
	- Picnic
	- Apple
	- Ikea

## Links

- https://beschikbaarheid.ideal.nl/
