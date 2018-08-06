<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user';
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
    protected $connection = 'blog';
    public static function getUser($id){
        $data = [];
        $data = User::where('id',$id)
                    ->orderBy('id','desc')
                    ->first()
                    ->toArray();
        return $data;
    }
}
