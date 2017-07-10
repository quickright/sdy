<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbWeixin extends Migration
{
    const CREATED_AT = 'create_date';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hd.tb_weixin', function (Blueprint $table) {
        $table->increments('id');
        $table->string('union_id')->default('')->comment('全局 union id');
        $table->string('open_id')->default('')->comment('');
        $table->integer('platform')->comment('open id 所属软件平台, 1 app/ios/android, 2 pc');
        //$table->string('create_date')->default('')->comment('英文');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('db_hd.tb_weixin');

    }
}
