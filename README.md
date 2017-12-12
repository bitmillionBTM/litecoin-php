# litecoin-php
Script to check current value of Litecoin using PHP CLI, getting values from external API

You can specify an amount (optional), or modify the script to set a default amount of Litecoins. 

Also, you can modify the API URL (currently `https://coinbin.org/ltc`) to get other cryptocurrency values like Bitcoin (`https://coinbin.org/btc`).

## Usage

From CLI: 

```bash
php litecoin-values.php [AMOUNT]
```

Results will be like:

```bash
$ php litecoin-values.php 5.23

Currency: Litecoin [269.80$]
Amount (USD): 5.23000000L [1,411.05$]
Amount (EUR): 5.23000000L [1,198.13€]
```
