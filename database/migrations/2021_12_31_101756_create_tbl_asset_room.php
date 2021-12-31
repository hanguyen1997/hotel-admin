<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAssetRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_asset_room', function (Blueprint $table) {
            $table->id();
            $table->integer('id_room')->length(11);
            $table->integer('id_asset')->length(11);
            $table->integer('quantily')->length(2);
            $table->tinyInteger('del_flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_asset_room');
    }
}
