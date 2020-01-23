<?php

use app\controller\Index;
use framework\Router as Router;

$app = new Router();

$app->get('/', function () {
    return Index::index();
});
