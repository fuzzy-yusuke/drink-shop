<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    //Userモデルと関連づける
    public function user_id(){
        return $this->belongsTo('App\User');
    }

    //Itemモデルと関連付ける
    public function item_id(){
        return $this->belongsTo('App\Item');
    }


}
