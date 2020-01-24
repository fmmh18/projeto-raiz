<?php

namespace app\controller;


class Index extends Controller
{
    public function index()
    {
        return self::view('home/index');
    }
}