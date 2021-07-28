<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    //テーブルを指定
    protected  $table='maker';

    //メーカー絞り込み
    public function getMaker()
    {
        $makers = Maker::pluck('maker_name', 'id');
        return $makers;
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
