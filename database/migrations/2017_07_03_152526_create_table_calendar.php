<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalendar extends Migration
{
    protected $connection="db_page";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_page.tb_calendar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->default(-1)->comment('uid');
            $table->integer('period')->default(-1)->comment('1 备孕 ，5 签证 ，10 入境 15 入住 20 建档 25 预产期-体检 30 生产 35 出生 40 月子 45 办证 50 回国 55 亲子   ');
            $table->string('day_date')->default('')->comment('发生的日期');
            $table->integer('post_id')->default(-1)->comment('postid');
            $table->integer('f_status')->default(-1)->comment('状态');
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
        Schema::dropIfExists('tb_calendar');
        Schema::dropIfExists('db_page.tb_calendar');

        
    }
}
