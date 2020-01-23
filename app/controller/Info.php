<?php

namespace app\controller;

use app\model\infoModel;

class Info
{

    public function index()
    {
        $infos = new infoModel;
        return $infos->list_info();
    }
}