<?php
# Docksal DB connection settings.
$databases['default']['default'] = array (
  'database' => 'default',
  'username' => 'user',
  'password' => 'user',
  'host' => 'db',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'I wish i were a boy in France.';

// Site Specific URL 
$base_url = "http://ec-upstream.docksal.site";
$settings['trusted_host_patterns'] = array('^ec-upstream\.docksal\.site', '^ec-upstream\.docksal');

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$config['system.logging']['error_level'] = 'verbose';

$settings['rebuild_access'] = TRUE;

$settings['skip_permissions_hardening'] = TRUE;

$settings['file_temporary_path'] = '/tmp';
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/files/private';
