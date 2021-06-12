<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBuyToQuantityOnCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart', function (Blueprint $table) {
            //型をintに変更
            $table->integer('buy')->default(NULL)->change();
            
            //カラム名を「buy」から「quantity」に変更
            $table->renameColumn('buy','quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function (Blueprint $table) {
            //それぞれ元に戻す
            $table->string('buy')->change();
            $table->renameColumn('quantity','buy');
        });
    }
}
