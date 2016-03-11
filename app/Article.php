<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=['title','content','published_at'];
    //将published_at 当作Carbon对象
//    protected $dates = ['published_at'];
//
//    /*
//     * setTitle(字段)Attribute
//     *
//     */
//    public function setTitleAttribute(){
//       //在把数据存入数据库之前对数据进行处理
//    }
//    /*
//     * scope 关键字+published方法名
//     */
//    public function scopePublished($query){
//        $query->where('published_at','<=',Carbon::now());
//    }
}
