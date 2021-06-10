<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameListToCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Listからcartにテーブル名を変更
        Schema::rename('list','cart');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            Schema::rename('cart','list');
    }
}
