<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ChromePhp' => 
            array (
                0 => __DIR__ . '/..' . '/ccampbell/chromephp',
            ),
        ),
    );

    public static $classMap = array (
        'UsabilityDynamics\\Job' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-job.php',
        'UsabilityDynamics\\Loader' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-loader.php',
        'UsabilityDynamics\\Settings' => __DIR__ . '/..' . '/udx/lib-settings/lib/class-settings.php',
        'UsabilityDynamics\\Structure' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-structure.php',
        'UsabilityDynamics\\Term' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-term.php',
        'UsabilityDynamics\\UD_API\\API' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-api.php',
        'UsabilityDynamics\\UD_API\\Admin' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-admin.php',
        'UsabilityDynamics\\UD_API\\Bootstrap' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-bootstrap.php',
        'UsabilityDynamics\\UD_API\\Licenses_Table' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-licenses-table.php',
        'UsabilityDynamics\\UD_API\\Manager' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-manager.php',
        'UsabilityDynamics\\UD_API\\More_Products_Table' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-more-products-table.php',
        'UsabilityDynamics\\UD_API\\Scaffold' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-scaffold.php',
        'UsabilityDynamics\\UD_API\\UI' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-ui.php',
        'UsabilityDynamics\\UD_API\\Update_Checker' => __DIR__ . '/..' . '/udx/lib-ud-api-client/lib/classes/class-update-checker.php',
        'UsabilityDynamics\\Utility' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-utility.php',
        'UsabilityDynamics\\Utility\\Guid_Fix' => __DIR__ . '/..' . '/udx/lib-utility/lib/class-guid-fix.php',
        'UsabilityDynamics\\WP\\Bootstrap' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-bootstrap.php',
        'UsabilityDynamics\\WP\\Bootstrap_Plugin' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-bootstrap-plugin.php',
        'UsabilityDynamics\\WP\\Bootstrap_Theme' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-bootstrap-theme.php',
        'UsabilityDynamics\\WP\\Dashboard' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-dashboard.php',
        'UsabilityDynamics\\WP\\Errors' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-errors.php',
        'UsabilityDynamics\\WP\\Scaffold' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-scaffold.php',
        'UsabilityDynamics\\WP\\TGMPA_List_Table' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-tgm-list-table.php',
        'UsabilityDynamics\\WP\\TGM_Bulk_Installer' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-tgm-bulk-installer.php',
        'UsabilityDynamics\\WP\\TGM_Bulk_Installer_Skin' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-tgm-bulk-installer.php',
        'UsabilityDynamics\\WP\\TGM_Plugin_Activation' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-tgm-plugin-activation.php',
        'UsabilityDynamics\\WP\\Utility' => __DIR__ . '/..' . '/udx/lib-wp-bootstrap/lib/classes/class-utility.php',
        'wpCloud\\StatelessMedia\\API' => __DIR__ . '/../..' . '/lib/classes/class-api.php',
        'wpCloud\\StatelessMedia\\Ajax' => __DIR__ . '/../..' . '/lib/classes/class-ajax.php',
        'wpCloud\\StatelessMedia\\Bootstrap' => __DIR__ . '/../..' . '/lib/classes/class-bootstrap.php',
        'wpCloud\\StatelessMedia\\BuddyBoss' => __DIR__ . '/../..' . '/lib/classes/compatibility/buddyboss.php',
        'wpCloud\\StatelessMedia\\BuddyPress' => __DIR__ . '/../..' . '/lib/classes/compatibility/buddypress.php',
        'wpCloud\\StatelessMedia\\CompatibilityAcfImageCrop' => __DIR__ . '/../..' . '/lib/classes/compatibility/acf-image-crop.php',
        'wpCloud\\StatelessMedia\\CompatibilityWooExtraProductOptions' => __DIR__ . '/../..' . '/lib/classes/compatibility/woo-extra-product-options.php',
        'wpCloud\\StatelessMedia\\Divi' => __DIR__ . '/../..' . '/lib/classes/compatibility/divi.php',
        'wpCloud\\StatelessMedia\\DynamicImageSupport' => __DIR__ . '/../..' . '/lib/classes/compatibility/dynamic-image-support.php',
        'wpCloud\\StatelessMedia\\EDDDownloadMethod' => __DIR__ . '/../..' . '/lib/classes/compatibility/easy-digital-downloads.php',
        'wpCloud\\StatelessMedia\\EWWW' => __DIR__ . '/../..' . '/lib/classes/compatibility/ewww.php',
        'wpCloud\\StatelessMedia\\Elementor' => __DIR__ . '/../..' . '/lib/classes/compatibility/elementor.php',
        'wpCloud\\StatelessMedia\\Errors' => __DIR__ . '/../..' . '/lib/classes/class-errors.php',
        'wpCloud\\StatelessMedia\\GS_Client' => __DIR__ . '/../..' . '/lib/classes/class-gs-client.php',
        'wpCloud\\StatelessMedia\\GravityForm' => __DIR__ . '/../..' . '/lib/classes/compatibility/gravity-forms.php',
        'wpCloud\\StatelessMedia\\ICompatibility' => __DIR__ . '/../..' . '/lib/classes/compatibility/ICompatibility.php',
        'wpCloud\\StatelessMedia\\Imagify' => __DIR__ . '/../..' . '/lib/classes/compatibility/imagify.php',
        'wpCloud\\StatelessMedia\\LSCacheWP' => __DIR__ . '/../..' . '/lib/classes/compatibility/lite-speed-cache.php',
        'wpCloud\\StatelessMedia\\LearnDash' => __DIR__ . '/../..' . '/lib/classes/compatibility/learn-dash.php',
        'wpCloud\\StatelessMedia\\Logger' => __DIR__ . '/../..' . '/lib/classes/class-logger.php',
        'wpCloud\\StatelessMedia\\Module' => __DIR__ . '/../..' . '/lib/classes/class-compatibility.php',
        'wpCloud\\StatelessMedia\\SOCSS' => __DIR__ . '/../..' . '/lib/classes/compatibility/siteorigin-css.php',
        'wpCloud\\StatelessMedia\\SOWidgetCSS' => __DIR__ . '/../..' . '/lib/classes/compatibility/siteorigin-widget-bundle.php',
        'wpCloud\\StatelessMedia\\Settings' => __DIR__ . '/../..' . '/lib/classes/class-settings.php',
        'wpCloud\\StatelessMedia\\ShortPixel' => __DIR__ . '/../..' . '/lib/classes/compatibility/shortpixel.php',
        'wpCloud\\StatelessMedia\\SyncNonMedia' => __DIR__ . '/../..' . '/lib/classes/class-sync-non-media.php',
        'wpCloud\\StatelessMedia\\Upgrader' => __DIR__ . '/../..' . '/lib/classes/class-upgrader.php',
        'wpCloud\\StatelessMedia\\Utility' => __DIR__ . '/../..' . '/lib/classes/class-utility.php',
        'wpCloud\\StatelessMedia\\WPBakeryPageBuilder' => __DIR__ . '/../..' . '/lib/classes/compatibility/wpbakery-page-builder.php',
        'wpCloud\\StatelessMedia\\WPForms' => __DIR__ . '/../..' . '/lib/classes/compatibility/wpforms.php',
        'wpCloud\\StatelessMedia\\WPRetina2x' => __DIR__ . '/../..' . '/lib/classes/compatibility/wp-retina-2x.php',
        'wpCloud\\StatelessMedia\\WPSmush' => __DIR__ . '/../..' . '/lib/classes/compatibility/wp-smush.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$classMap;

        }, null, ClassLoader::class);
    }
}
