<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return GeneralConfig::create()
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls()
    // Enable Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
    ->devMode($isDev)
    // Allow administrative changes
    ->allowAdminChanges($isDev)
    // Disallow robots
    ->disallowRobots(!$isProd)
    // Prevent user enumeration in the "forgot password" flow
    ->preventUserEnumeration($isDev)
    // Prevent the "X-Powered-By" header from being sent
    ->sendPoweredByHeader(false)
    // Allow only ASCII characters in generated slugs
    ->limitAutoSlugsToAscii(true)
    // Runs Craft in headless mode
    ->headlessMode(true)
    // Aliases
    ->aliases([
        '@web' => rtrim(App::env('PRIMARY_SITE_URL'), '/'),
        '@webroot' => dirname(__DIR__) . '/web',
    ]);
