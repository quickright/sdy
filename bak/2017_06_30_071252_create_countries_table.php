<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cn')->default('')->comment('中文名');
            $table->string('name_en')->default('')->comment('英文名');
            $table->integer('status')->default(-1)->comment('状态');
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
        Schema::dropIfExists('tb_countries');
    }
}
