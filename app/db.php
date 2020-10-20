<?php
require_once '../config/config.php';
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

/*
require_once '../vendor/illuminate/database/Capsule/Manager.php';

use Illuminate\Database\Capsule\Manager as Capsule;

CONST DB_DSN = 'mysql:dbname=webdev1ek2_ArneVerleyen;host=127.0.0.1;port=3306';
CONST DB_DRIVER = 'mysql';
CONST DB_HOST = '127.0.0.1';
CONST DB_USER = 'root';
CONST DB_PWD = 'secret';
CONST DB_NAME = 'webdev1ek2_ArneVerleyen';

CONST DB_CONNECTION = [
    'driver' => DB_DRIVER,
    'host' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PWD,
    'database' => DB_NAME,
    'charset' => 'utf8',
    'prefix' => '',
];

$capsule = new Capsule();

$capsule->addConnection(DB_CONNECTION);
$capsule->setAsGlobal();
$capsule->bootEloquent();
*/