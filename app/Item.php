<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //テーブルを指定
    protected  $table='item';

    //リレーションを設定
    public function user(){
        return $this->belongsTo('App\User');
    }
}
