<?php
return array (
  'backend' => 
  array (
    'frontName' => 'management',
  ),
  'crypt' => 
  array (
    'key' => '79f69555fae03f1ecdb3c93e93e32ff5',
  ),
  'session' => 
  array (
    'save' => 'db',
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'mysql',
        'dbname' => 'buywithme',
        'username' => 'magento',
        'password' => 'buyw1thme5ql',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'full_page' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'translate' => 1,
    'config_webservice' => 1,
  ),
  'install' => 
  array (
    'date' => 'Sun, 18 Dec 2016 11:57:15 +0000',
  ),
);
