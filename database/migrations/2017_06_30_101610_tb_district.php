<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('db_hd.tb_district', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cn')->default('')->comment('中文名');
            $table->string('name_en')->default('')->comment('英文名');
            $table->integer('f_status')->default(-1)->comment('状态');
            $table->integer("country_id")->default(-1)->comment('国家');
            $table->integer('level')->default(-1)->comment('等级');
            $table->integer('area_id')->default(-1)->comment('区域');
            $table->integer('is_hot')->default(-1)->comment('热点');

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
        //
        Schema::dropIfExists('db_hd.tb_district');
    }
}
