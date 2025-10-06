=== ByteNFT Payment Gateway ===
Contributors: ByteNFT
Tags: woocommerce, payment gateway, fiat, ByteNFT
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.0.7
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

The ByteNFT Payment Gateway plugin for WooCommerce 8.9+ allows you to accept fiat payments to sell products on your WooCommerce store.

== Description ==

This plugin integrates ByteNFT Payment Gateway with WooCommerce, enabling you to accept fiat payments. 

== Installation ==

1. Download the plugin ZIP file from GitHub.
2. Extract the ZIP file and upload it to the `wp-content/plugins` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= How do I obtain API keys? =

Visit the ByteNFT website and log in to your account. Navigate to Developer Settings to generate or retrieve API keys.

== Changelog ==

= 1.0.6 =
* Updated payment domain to `pay.bytenft.xyz` for improved security and reliability.

= 1.0.5 =
* Fixed an issue where payment link expired after 30 minutes.
* Fixed an issue where users were not redirected to the Invoice page after a successful or failed transaction.
* Fixed a bug where the payment link email was not sent automatically to the customer.

= 1.0.4 =
* Fixed an issue that checks the account key’s status and displays an error if it is inactive or invalid, preventing normal flow execution.
* Fixed an issue where the settings now appear immediately when Sandbox Mode is enabled, without requiring a click inside the field.

= 1.0.3 =
* Fixed an issue where changes to account settings were not properly synced after refreshing the admin settings page.
* Refactored internal logic for account validation and improved sandbox/live switching.
* Fixed an issue where sanbox is selected then sanbox keys option show and sanbox select option work.

= 1.0.2 =
* Added support for **Mastercard credit/debit card** payments.
* Orders now issue a **utility NFT** — no crypto or wallet needed.
* Improved frontend UX for credit card + NFT-backed checkout.

= 1.0.1 =
* Initial release.

== Upgrade Notice ==

= 1.0.7 =
* Introduces multi-currency support, allowing greater flexibility and a smoother checkout experience for international customers.

= 1.0.6 =
We’ve moved to a new payment domain: `pay.bytenft.xyz`. Please update saved links, API integrations, or whitelists if required.

= 1.0.5 =
* Fixed payment link expiry, invoice redirection, and email sending issues. 

= 1.0.4 =
* Added account key validation and instant Sandbox Key field display.

= 1.0.3 =
* Synced account settings after refresh and improved Sandbox/Live handling.

= 1.0.2 =
* Added support for Mastercard payments with automatic NFT issuance, no wallet required.

= 1.0.1 =
Initial release.

== Support ==

For support, visit: [https://pay.bytenft.xyz/reach-out](https://pay.bytenft.xyz/reach-out)
