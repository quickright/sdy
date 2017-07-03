<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDoctorStudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_doctor_studio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en')->default('')->comment('英文名');
            $table->string('name_cn')->default('')->comment('中文名');
            $table->string('point_b')->default('')->comment('百度坐标');
            $table->string('point_g')->default('')->comment('google坐标');
            $table->string('address')->default('')->comment('工作室地址');
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
        Schema::dropIfExists('tb_doctor_studio');
    }
}
