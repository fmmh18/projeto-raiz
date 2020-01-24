<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    
    protected $table = "users";

    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_users()
    {
        return userModel::get();
    }
}