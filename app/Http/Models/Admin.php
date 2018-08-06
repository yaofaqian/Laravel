<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'admin';
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * 此模型的连接名称。
     *
     * @var string
     */
   // protected $connection = 'connection-name';
    public static function getAdmin(){
        $data = [];
        $data = Admin::orderBy('id', 'desc')
                                ->take(10)
                                ->get();
        return $data;
    }
}
