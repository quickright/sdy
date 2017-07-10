<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHospital extends Migration
{
            protected $connection="db_hd";


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hd.tb_hospital', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cn')->default('')->comment('中文');
            $table->string('name_en')->default('')->comment('英文');
            $table->string('email')->default('')->comment('email');
            $table->integer('f_type')->default(-1)->comment('医院类型：1 工作室，2 普通医院 3，');
            $table->string('open_daily')->default('')->comment('营业时间');
            $table->integer('post_id')->default(-1)->comment('备注信息');
            $table->string('point_b')->default('')->comment('百度坐标');
            $table->string('point_g')->default('')->comment('google坐标');
            $table->string('address')->default('')->comment('地址');
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
        Schema::dropIfExists('db_hd.tb_hospital');
    }
}
