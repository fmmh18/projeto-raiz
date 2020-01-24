<?php

require __DIR__ . '/../bootstrap.php';

use app\controller\Index;
use framework\Router;

$app = new Router;

$app->get("/",function(){
    return Index::index();  
});
