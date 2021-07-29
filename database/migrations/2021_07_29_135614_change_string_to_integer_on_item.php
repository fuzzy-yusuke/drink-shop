<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStringToIntegerOnItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            //数字を扱うカラムの型をincrementsに変更
            $table->integer('maker_id')->change();
            $table->integer('quantity')->change();
            $table->integer('price')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item', function (Blueprint $table) {
            //
            $table->string('maker_id')->change();
            $table->string('quantity')->change();
            $table->string('price')->change();
        });
    }
}
