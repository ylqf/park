<?php
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set('PRC');

require 'lib/function.php';
require 'lib/medoo.php';

$dbConfig = array(
    'database_type' => 'mysql',
    'database_name' => 'park',
    'server' => 'localhost',
    'username' => 'park_user',
    'password' => 'bXzdUPchMscKsRr',
    'charset' => 'utf8'
);
$db = new medoo($dbConfig);