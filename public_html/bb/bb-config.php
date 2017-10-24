<?php 
return array (
  'debug' => false,
  'license' => 'FREE-YAZU-2FD7-4ZII-I8DN-3OG1',
  'salt' => '99825285742315a372fe2fc70414a22e',
  'url' => 'http://156.67.219.227/bb/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/home/admin/web/rhevin.boxbilling.xyz/public_html/bb/bb-data',
  'path_logs' => '/home/admin/web/rhevin.boxbilling.xyz/public_html/bb/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'admin_boxbilling',
    'user' => 'admin_admin',
    'password' => 'password',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/home/admin/web/rhevin.boxbilling.xyz/public_html/bb/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);