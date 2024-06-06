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

The icons and logos are from the https://github.com/pronamic/wp-pay-logos library.

| Code | Name | iDEAL Hub<br>`40` `×` `40` | Mollie<br>`32` `×` `24` | Pronamic<br>`512` `×` `512` | Pronamic<br>`640` `×` `360` |
| --- | --- | --- | --- | --- | --- |
| `ABNANL2A` | ABN AMRO | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `ASNBNL21` | ASN Bank | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `BUNQNL2A` | bunq | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `INGBNL2A` | ING | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `KNABNL2H` | Knab | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `NTSBDEB1` | N26 | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `NNBANL2G` | Nationale-Nederlanden | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `RABONL2U` | Rabobank | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `RBRBNL21` | RegioBank | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `REVOLT21` | Revolut | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `SNSBNL2A` | SNS Bank | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `TRIONL2U` | Triodos Bank | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `FVLBNL22` | Van Lanschot Kempen | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-640x360.svg" width="128" height="72" alt="Pronamic"> |
| `BITSNL2A` | yoursafe | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-ideal-hub-40x40.svg" width="40" height="40" alt="iDEAL Hub"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-mollie-32x24.svg" width="32" height="24" alt="Mollie"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-icon-512x512.svg" width="64" height="64" alt="Pronamic"> | <img src="https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-640x360.svg" width="128" height="72" alt="Pronamic"> |

## Ideas

- Publish to NPM.
- GitHub action to check https://beschikbaarheid.ideal.nl/.
- Example of HTML select.
- https://pronamic.github.io/ideal-issuers/
- JSON schema.
- https://select2.org/dropdown
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
