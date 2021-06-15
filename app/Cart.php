<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{

    //テーブル名明示
    protected $table='cart';

    //Userモデルと関連づける
    public function user_id()
    {
        return $this->belongsTo('App\User');
    }

    //Itemモデルと関連付ける
    public function item_id()
    {
        return $this->belongsTo('App\Item');
    }

    protected $fillable=[
        //商品IDとユーザーIDを変更可能にする
        'item_id','user_id',
    ];
}
