<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class infoModel extends Model
{

    protected $table = "infos";

    public function __construct()
    {
        parent::__construct();
    }

    public function list_info()
    {
        return infoModel::where('status','=',1)->get();
    }

}