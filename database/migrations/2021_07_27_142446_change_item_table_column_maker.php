<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeItemTableColumnMaker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            //makerからmaker_idに変更
            $table->renameColumn('maker', 'maker_id');
        });
        Schema::table('item', function (Blueprint $table) {
            //makerからmaker_idに変更
            $table->bigIncrements('maker_id')->default(NULL)->change();
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
            //makerからmaker_idに変更
            $table->string('maker_id')->default(NULL)->change();
        });
        Schema::table('item', function (Blueprint $table) {
            $table->renameColumn('maker_id', 'maker');
        });
        
    }
}
