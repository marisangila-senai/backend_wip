<?php
require_once __DIR__ . '/app/config.php';
require_once __DIR__ . '/app/Gateway.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$gateway = new Gateway();

$acao = $_REQUEST['acao'] ?? '';

if ($acao) {
    $gateway->run();
    exit; 
}

require_once __DIR__ . '/public/login.php';
