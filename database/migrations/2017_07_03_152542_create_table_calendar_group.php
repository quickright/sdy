<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalendarGroup extends Migration
{
    protected $connection="db_page";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_page.tb_calendar_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->default(-1)->comment('简称');
            $table->integer('period')->default(-1)->comment('1 备孕 ，5 签证 ，10 入境 15 入住 20 建档 25 预产期-体检 30 生产 35 出生 40 月子 45 办证 50 回国 55 亲子   ');
            $table->integer('center_id')->default(-1)->comment('中心id');
            $table->integer('pid')->default(-1)->comment('产品id');
            $table->integer('hospital_id')->default(-1)->comment('医院id');
            $table->integer('doctor_id')->default(-1)->comment('医生id');
            $table->integer('price')->default(-1)->comment('价格');
            $table->string('day_date')->default('')->comment('日记日期');
            $table->integer('f_status')->default(-1)->comment('状态');
            $table->integer('calendar_cnt')->default(-1)->comment('日记数');
            $table->integer('post_cnt')->default(-1)->comment('帖子数');
            $table->integer('post_open_cnt')->default(-1)->comment('公开帖子数');
            $table->integer('favor_cnt')->default(-1)->comment('帖子喜欢数');
            $table->integer('view_cnt')->default(-1)->comment('帖子浏览数量');
            $table->integer('comment_cnt')->default(-1)->comment('帖子评论数');
            $table->integer('last_post_id')->default(-1)->comment('最后帖子id');
            $table->integer('last_open_post_id')->default(-1)->comment('最后公开的post_id');
            $table->integer('last_calendar_id')->default(-1)->comment('最后记录id');
            $table->integer('hot_yn')->default(-1)->comment('是否热门 1是0否');
            $table->integer('country_id')->default(-1)->comment('');
            $table->integer('cash_back_yn')->default(-1)->comment('是否已返现');
            $table->integer('report_yn')->default(-1)->comment('是否投诉 1是 0否');
            $table->integer('weight')->default(-1)->comment('手动权重');
            $table->integer('relation_yn')->default(-1)->comment('1.关联中心 0取消关联');
            $table->integer('is_top')->default(-1)->comment('是否被置顶 0 不置顶 1置顶');
            $table->integer('top_sort')->default(-1)->comment('置顶排序序号');
            $table->string('lou_update_date')->default('')->comment('楼主最后回复时间');
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
        Schema::dropIfExists('tb_calendar_group');
        Schema::dropIfExists('db_page.tb_calendar_group');

        
    }
}
