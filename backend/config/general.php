<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isLocal = App::env('ENVIRONMENT') === 'local';
$isProd = App::env('ENVIRONMENT') === 'production';

return [
    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 1,

    // Whether generated URLs should omit "index.php"
    'omitScriptNameInUrls' => true,

    // The URI segment that tells Craft to load the control panel
    'cpTrigger' => App::env('CP_TRIGGER') ?: 'admin',

    // The secure key Craft will use for hashing and encrypting data
    'securityKey' => App::env('SECURITY_KEY'),

    // Whether Dev Mode should be enabled (see https://craftcms.com/guides/what-dev-mode-does)
    'devMode' => $isLocal,

    // Whether administrative changes should be allowed
    'allowAdminChanges' => $isLocal,

    // Whether crawlers should be allowed to index pages and following links
    'disallowRobots' => !$isProd,

    'preventUserEnumeration' => $isLocal,

    'sendPoweredByHeader' => false,

    'limitAutoSlugsToAscii' => true,

    'overridePhpSessionLocation' => false,

    'tokenParam' => 'preview_token',

    'headlessMode' => true,

    'aliases' => [
        '@webroot' => dirname(__DIR__) . '/web',
    ]
];
