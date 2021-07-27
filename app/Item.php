<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //テーブルを指定
    protected  $table='item';

    //リレーションを設定
    public function user(){
        return $this->belongsTo('App\User');
    }

    //メーカー絞り込み
    public function scopeSearch(Builder $query,array $params):Builder
    {
    if(!empty($params['maker'])) $query->where('maker',$params['maker']);
    return $query;
}
}
