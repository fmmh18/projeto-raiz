<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); 
if(getenv('APP_DEBUG') == TRUE){
    
error_reporting(E_ALL);
ini_set('display_errors', true);
}
session_start();

include __DIR__ . '/src/dependecies.php';
include __DIR__ . '/src/routes.php';
