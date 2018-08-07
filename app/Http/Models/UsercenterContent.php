<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UsercenterContent extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'usercenter_content';
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
    protected $connection = 'usercenterdb';
    /**
     * 查询用户信息
     *
     * @var string
     */
    public static function BackendUsercenterContentloginDetail($postdata){
        $data = [];
        $data = UsercenterContent::where('content_tel',$postdata['username'])
            ->where('content_passwd',$postdata['userpwd'])
            ->first();
        $data = !empty($data)?1:0;
        return $data;
    }
}
