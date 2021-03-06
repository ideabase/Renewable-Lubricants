<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
  // Global settings
  '*' => [
    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,

    // Enable CSRF Protection (recommended)
    'enableCsrfProtection' => true,

    // Whether generated URLs should omit "index.php"
    'omitScriptNameInUrls' => true,

    // Control Panel trigger word
    'cpTrigger' => 'admin',

    // Login path
    'loginPath' => 'admin/login',

    // The secure key Craft will use for hashing and encrypting data
    'securityKey' => getenv('SECURITY_KEY'),

    // String to append to paginated URLs
    'pageTrigger' => 'page/'
  ],

  // Dev environment settings
  'dev' => [
    // Base site URL
    // e.g. http://ideabase.web
    'siteUrl' => 'http://renew.web',

    // Dev Mode (see https://craftcms.com/support/dev-mode)
    'devMode' => true,

    // Backup and restore commands for MAMP
    'backupCommand' => getenv('BACKUP_COMMAND'),
    'restoreCommand' => getenv('RESTORE_COMMAND'),
  ],

  // Staging environment settings
  'staging' => [
    // Base site URL
    'siteUrl' => 'http://renewablelubricants.ideabase.cci.kent.edu/',
  ],

  // Production environment settings
  'production' => [
    // Base site URL
    'siteUrl' => 'PRODUCTION URL HERE',
  ],
];
