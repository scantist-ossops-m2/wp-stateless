# WordPress Stateless Media Plugin

## Description

Upload and serve your WordPress media from Google Cloud Storage (GCS) with the WP-Stateless plugin. In as little as two minutes, you will be benefitting from serving your media from Google Cloud's distributed servers.

New to Google Cloud? Google is offering you a [$300 credit](https://console.cloud.google.com/freetrial?referralId=e1c28cf728ff49b38d4eb5add3f5bfc8) to get you started.

### Benefits
* Store and deliver media files on Google Cloud Storage instead of your server.
* Google Cloud Storage is geo-redundant, meaning your media is delivered by the closest server - reducing latency and improving page speed.
* Scale your WordPress website across multiple servers without the need of synchronizing media files.
* Native integration between Google Cloud Storage and WordPress.
* $300 free trial from Google Cloud. Nice!

### Modes
* Backup - Upload media files to Google Storage and serve local file urls.
* CDN - Copy media files to Google Storage and serve them directly from there.
* Ephemeral - Store and serve media files with Google Cloud Storage only. Media files are not stored locally, but local storage is used temporarily for processing and is required for certain compatibilities.
* Stateless - Store and serve media files with Google Cloud Storage only. Media files are not stored locally.

### Features
* Setup assistant makes getting started fast and easy.
* No need to manually create service accounts or buckets - handled automatically.
* Settings panel provides you with further GCS configuration and file url customization.
* Mask the default GCS URL with your own custom domain.
* Automatically replace hardcoded media URLs with GCS equivalents in post editor and meta.
* Batch image thumbnail regeneration.
* Synchronization tools for uploading existing files and images.
* All settings supported with wp-config constants and network setting overrides.
* Multiple modes: Backup, CDN, Ephemeral, Stateless.
* All files served in HTTPS mode.
* Serverless platform compatible, including Google App Engine.
* Multisite compatible.

### Addons
* [WP-Stateless - BuddyBoss Platform Addon](https://github.com/udx/wp-stateless-buddyboss-addon)
* [WP-Stateless - BuddyPress Addon](https://github.com/udx/wp-stateless-buddypress-addon)
* [WP-Stateless - Contact Form by WPForms Addon](https://github.com/udx/wp-stateless-wp-forms-lite-addon)
* [WP-Stateless - Divi theme Addon](https://github.com/udx/wp-stateless-divi-addon)
* [WP-Stateless - Easy Digital Downloads Addon](https://github.com/udx/wp-stateless-easy-digital-downloads-addon)
* [WP-Stateless - Elementor Website Builder Addon](https://github.com/udx/wp-stateless-elementor-addon)
* [WP-Stateless - EWWW Image Optimizer Addon](https://github.com/udx/wp-stateless-ewww-addon)
* [WP-Stateless - Gravity Forms Addon](https://github.com/udx/wp-stateless-gravity-forms-addon)
* [WP-Stateless - Gravity Forms Signature Addon](https://github.com/udx/wp-stateless-gravity-forms-signature-addon)
* [WP-Stateless - Imagify Addon](https://github.com/udx/wp-stateless-imagify-addon)
* [WP-Stateless - LearnDash LMS Plugin Addon](https://github.com/udx/wp-stateless-learndash-addon)
* [WP-Stateless - LiteSpeed Cache Addon](https://github.com/udx/wp-stateless-litespeed-cache-addon)
* [WP-Stateless - Polylang Pro Addon](https://github.com/udx/wp-stateless-polylang-pro-addon)
* [WP-Stateless - Simple Local Avatars Addon](https://github.com/udx/wp-stateless-simple-local-avatars-addon)
* [WP-Stateless - SiteOrigin CSS Addon](https://github.com/udx/wp-stateless-siteorigin-css-addon).
* [WP-Stateless - SiteOrigin Widgets Bundle Addon](https://github.com/udx/wp-stateless-siteorigin-widgets-bundle-addon)
* [WP-Stateless - WPBakery Page Builder Addon](https://github.com/udx/wp-stateless-wpbakery-page-builder-addon)
* [WP-Stateless - WooCommerce Addon](https://github.com/udx/wp-stateless-woocommerce-addon)
* [WP-Stateless - WooCommerce Extra Product Options Addon](https://github.com/udx/wp-stateless-woo-extra-product-options-addon)
* [WP-Stateless - ShortPixel Image Optimizer Addon](https://github.com/udx/wp-stateless-shortpixel-addon)
* [WP-Stateless - Smush Addon](https://github.com/udx/wp-stateless-wp-smushit-addon)
* [WP-Stateless - The Events Calendar Addon](https://github.com/udx/wp-stateless-the-events-calendar-addon)

### Support, Feedback, & Contribute
We welcome community involvement via the [GitHub repository](https://github.com/udx/wp-stateless).

### Custom Development
Looking for a unique feature for your next project? [Hire us!](https://udx.io/)

## Installation

1. Search, install, and activate the *WP-Stateless* plugin via your WordPress dashboard.
2. Begin WP-Stateless setup assistant at *Media > Stateless Setup* and click "Get Started Now."
3. Click "Google Login" and sign-in with your Google account.
4. Set a Google Cloud Project, Google Cloud Storage Bucket, and Google Cloud Billing Account and click "Continue."
5. Installation and setup is now complete. Visit *Media > Stateless Settings* for more options.

For a more detailed installation and setup walkthrough, please see the [manual setup instructions on Github](https://wp-stateless.github.io/docs/manual-setup/).

## Frequently Asked Questions

### What are the minimum server requirements for this plugin?

Beyond the [official WordPress minimum requirements](https://codex.wordpress.org/Template:Server_requirements), WP-Stateless requires a minimum PHP version of 7.2 or higher and OpenSSL to be enabled.

### What wp-config constants are supported?

For a complete list of supported wp-config constants, please consult the [GitHub documentation](https://wp-stateless.github.io/docs/constants/).

### How do I manually generate the Service Account JSON?

The WP-Stateless setup assistant will create the Service Account JSON automatically for you, but you can follow these steps if you choose to create it manually.

1. Visit Google Cloud Console, and go to *IAM & Admin > Service accounts*.
2. Click *Create Service Account* and name it *wp-stateless*.
3. Set the role to *Storage > Storage Admin*.
4. Check *Furnish a new private key* and select *JSON* as the key type.
5. Open the JSON file and copy the contents into the *Service Account JSON* textarea within the WP-Stateless settings panel.

### Where can I submit feature requests or bug reports?

We encourage community feedback and discussion through issues on the [GitHub repository](https://github.com/udx/wp-stateless/issues).

### Can I test new features before they are released?

To ensure new releases cause as little disruption as possible, we rely on a number of early adopters who assist us by testing out new features before they are released. [Please contact us](https://udx.io/) if you are interested in becoming an early adopter.

### Who maintains this plugin?

[UDX](https://udx.io/) maintains this plugin by continuing development through it's own staff, reviewing pull requests, testing, and steering the overall release schedule. UDX is located in Durham, North Carolina and provides WordPress engineering and hosting services to clients throughout the United States.
