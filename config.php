<?php
require 'environment.php';

$config = array();
global $db;

if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/lany/");
    $config['dbname'] = 'loja_inoveh';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://developers.inoveh.com.br/");
    $config['dbname'] = 'inoveh1_webstore';
    $config['host'] = 'bdhost0110.servidorwebfacil.com';
    $config['dbuser'] = 'inoveh1_webstore';
    $config['dbpass'] = 'DB256432inoveh';
}

$config['cepOrigem'] = '37551259';

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}


