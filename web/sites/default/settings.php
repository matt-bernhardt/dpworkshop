<?php

/**
 * Load configuration overrides.
 */
$secrets_file = $_SERVER['HOME'] . '/files/private/secrets.json';
/*
if ( ! file_exists( $secrets_file ) ) {
  // die('No secrets file found at ' . $secrets_file );
}
*/
$secrets = json_decode( file_get_contents( $secrets_file ), 1 );
/*
if ( false == $secrets ) {
  // die( 'Error parsing secrets file' );
}
*/
$config['smtp.settings']['smtp_from']     = $secrets['smtp_from'];
$config['smtp.settings']['smtp_fromname'] = $secrets['smtp_fromname'];
$config['smtp.settings']['smtp_host']     = $secrets['smtp_host'];
$config['smtp.settings']['smtp_password'] = $secrets['smtp_password'];
$config['smtp.settings']['smtp_port']     = $secrets['smtp_port'];
$config['smtp.settings']['smtp_protocol'] = $secrets['smtp_protocol'];
$config['smtp.settings']['smtp_username'] = $secrets['smtp_username'];

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Place the config directory outside of the Drupal root.
 */
$settings['config_sync_directory'] = dirname(DRUPAL_ROOT) . '/config';

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

/**
 * Always install the 'standard' profile to stop the installer from
 * modifying settings.php.
 */
$settings['install_profile'] = 'standard';
