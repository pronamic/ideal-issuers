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

| Code | Name | iDEAL Hub SVG<br>`40` `×` `40` | Mollie SVG<br>`32` `×` `24` | Pronamic SVG<br>`512` `×` `512` |
| --- | --- | --- | --- | --- |
| `ABNANL2A` | ABN AMRO | ![ABN AMRO](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-ideal-hub-40x40.svg) | ![ABN AMRO](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-mollie-32x24.svg) | ![ABN AMRO](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-icon-512x512.svg) |
| `ASNBNL21` | ASN Bank | ![ASN Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-ideal-hub-40x40.svg) | ![ASN Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-mollie-32x24.svg) | ![ASN Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-icon-512x512.svg) |
| `BUNQNL2A` | bunq | ![bunq](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-ideal-hub-40x40.svg) | ![bunq](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-mollie-32x24.svg) | ![bunq](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/bunq/ideal-issuer-bunq-icon-512x512.svg) |
| `INGBNL2A` | ING | ![ING](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-ideal-hub-40x40.svg) | ![ING](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-mollie-32x24.svg) | ![ING](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/ing/ideal-issuer-ing-icon-512x512.svg) |
| `KNABNL2H` | Knab | ![Knab](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-ideal-hub-40x40.svg) | ![Knab](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-mollie-32x24.svg) | ![Knab](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/knab/ideal-issuer-knab-icon-512x512.svg) |
| `NTSBDEB1` | N26 | ![N26](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-ideal-hub-40x40.svg) | ![N26](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-mollie-32x24.svg) | ![N26](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/n26/ideal-issuer-n26-icon-512x512.svg) |
| `NNBANL2G` | Nationale-Nederlanden | ![Nationale-Nederlanden](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-ideal-hub-40x40.svg) | ![Nationale-Nederlanden](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-mollie-32x24.svg) | ![Nationale-Nederlanden](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/nn/ideal-issuer-nn-icon-512x512.svg) |
| `RABONL2U` | Rabobank | ![Rabobank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-ideal-hub-40x40.svg) | ![Rabobank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-mollie-32x24.svg) | ![Rabobank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-icon-512x512.svg) |
| `RBRBNL21` | RegioBank | ![RegioBank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-ideal-hub-40x40.svg) | ![RegioBank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-mollie-32x24.svg) | ![RegioBank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-icon-512x512.svg) |
| `REVOLT21` | Revolut | ![Revolut](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-ideal-hub-40x40.svg) | ![Revolut](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-mollie-32x24.svg) | ![Revolut](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/revolut/ideal-issuer-revolut-icon-512x512.svg) |
| `SNSBNL2A` | SNS Bank | ![SNS Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-ideal-hub-40x40.svg) | ![SNS Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-mollie-32x24.svg) | ![SNS Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/sns/ideal-issuer-sns-icon-512x512.svg) |
| `TRIONL2U` | Triodos Bank | ![Triodos Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-ideal-hub-40x40.svg) | ![Triodos Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-mollie-32x24.svg) | ![Triodos Bank](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-icon-512x512.svg) |
| `FVLBNL22` | Van Lanschot Kempen | ![Van Lanschot Kempen](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-ideal-hub-40x40.svg) | ![Van Lanschot Kempen](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-mollie-32x24.svg) | ![Van Lanschot Kempen](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/van-lanschot-kempen/ideal-issuer-van-lanschot-kempen-icon-512x512.svg) |
| `BITSNL2A` | yoursafe | ![yoursafe](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-ideal-hub-40x40.svg) | ![yoursafe](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-mollie-32x24.svg) | ![yoursafe](https://raw.github.com/pronamic/wp-pay-logos/main/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-icon-512x512.svg) |

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
