<?php

return [
    /*
     * Contains environment specific variables such as usernames and passwords that you do not want to commit to VCS.
     */
    'environment' => file_exists(__DIR__ . '/env.php') ? include __DIR__ . '/env.php' : [],

    /*
     * Plugins registered with the application. Spiffy\Framework is event-driven so plugins drive the entire framework.
     * The default configuration is available in \Spiffy\Framework\ApplicationConfig. Any matching
     * keys here will overwrite the default values set in ApplicationConfig.
     */
    'plugins' => [],

    /*
     * This setting, if set, enables caching of the package manager merged config. This will save you a decent amount
     * of time per request but should only be set in production or you will have to clear the cache every time
     * you make a configuration change in a module.
     */
    'package_config_cache' => null,

    /*
     * This setting contains the glob pattern (http://us2.php.net/glob) used to determine which files to load
     * to override the default configuration. This is useful for configuring different environments (development,
     * staging, production, etc.). By default this pattern loads config/override/*.config.php files.
     */
    'config_override_pattern' => 'config/override/*.config.php',

    /*
     * The flags used when calling glob with the override_pattern above. In general you should not need to modify this.
     */
    'config_override_flags' => 0,

    /*
     * A list of packages to load. Order is important! Generally you're application should be loaded last so that
     * it can override any other package. Packages prepended with ? are only loaded in debug mode (default false, set
     * via the environment key above).
     */
    'packages' => [
        'Application'
    ],
];
