<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHospitalImg extends Migration
{
            protected $connection="db_hd";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hd.tb_hospital_img', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->default('')->comment('图片地址');
            $table->string('min_url')->default('')->comment('小图片');
            $table->string('original_url')->default(-1)->comment('原始图片');
            $table->integer('width')->default(-1)->comment('宽');
            $table->integer('height')->default(-1)->comment('高');
            $table->integer('f_status')->default(-1)->comment('状态');
            $table->integer('seq')->default(-1)->comment('顺序');
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
        Schema::dropIfExists('db_hd.tb_hospital_img');
    }
}
