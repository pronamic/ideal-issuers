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

| Code | Name | Mollie `32` `×` `24` SVG | iDEAL Hub `40` `×` `40` SVG |
| ---- | ---- | ------------------------ |---------------------------- |
| `ABNANL2A` | ABN AMRO | ![ABN AMRO](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-mollie-32x24.svg) | ![ABN AMRO](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/abn-amro/ideal-issuer-abn-amro-ideal-hub-40x40.svg) |
| `ASNBNL21` | ASN Bank | ![ASN Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-mollie-32x24.svg) | ![ASN Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/asn-bank/ideal-issuer-asn-bank-ideal-hub-40x40.svg) |
| `BUNQNL2A` | bunq | ![bunq](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/bunq/ideal-issuer-bunq-mollie-32x24.svg) | ![bunq](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/bunq/ideal-issuer-bunq-ideal-hub-40x40.svg) |
| `INGBNL2A` | ING | ![ING](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/ing/ideal-issuer-ing-mollie-32x24.svg) | ![ING](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/ing/ideal-issuer-ing-ideal-hub-40x40.svg) |
| `KNABNL2H` | Knab | ![Knab](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/knab/ideal-issuer-knab-mollie-32x24.svg) | ![Knab](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/knab/ideal-issuer-knab-ideal-hub-40x40.svg) |
| `NTSBDEB1` | N26 | ![N26](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/n26/ideal-issuer-n26-mollie-32x24.svg) | ![N26](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/n26/ideal-issuer-n26-ideal-hub-40x40.svg) |
| `NNBANL2G` | Nationale-Nederlanden | ![Nationale-Nederlanden](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/nn/ideal-issuer-nn-mollie-32x24.svg) | ![Nationale-Nederlanden](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/nn/ideal-issuer-nn-ideal-hub-40x40.svg) |
| `RABONL2U` | Rabobank | ![Rabobank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-mollie-32x24.svg) | ![Rabobank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/rabobank/ideal-issuer-rabobank-ideal-hub-40x40.svg) |
| `RBRBNL21` | RegioBank | ![RegioBank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-mollie-32x24.svg) | ![RegioBank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/regiobank/ideal-issuer-regiobank-ideal-hub-40x40.svg) |
| `REVOLT21` | Revolut | ![Revolut](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/revolut/ideal-issuer-revolut-mollie-32x24.svg) | ![Revolut](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/revolut/ideal-issuer-revolut-ideal-hub-40x40.svg) |
| `SNSBNL2A` | SNS Bank | ![SNS Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/sns/ideal-issuer-sns-mollie-32x24.svg) | ![SNS Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/sns/ideal-issuer-sns-ideal-hub-40x40.svg) |
| `TRIONL2U` | Triodos Bank | ![Triodos Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-mollie-32x24.svg) | ![Triodos Bank](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/triodos-bank/ideal-issuer-triodos-bank-ideal-hub-40x40.svg) |
| `FVLBNL22` | Van Lanschot Kempen | ![Van Lanschot Kempen](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/van-lanschot/ideal-issuer-van-lanschot-mollie-32x24.svg) | ![Van Lanschot Kempen](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/van-lanschot/ideal-issuer-van-lanschot-ideal-hub-40x40.svg) |
| `BITSNL2A` | yoursafe | ![yoursafe](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-mollie-32x24.svg) | ![yoursafe](https://cdn.jsdelivr.net/npm/@wp-pay/logos@2.1.0/dist/ideal-issuers/yoursafe/ideal-issuer-yoursafe-ideal-hub-40x40.svg) |

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
