<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    protected $connection="db_page";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::connection('db_page')->create('tb_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('中文名');
            $table->integer('post_type')->default(-1)->comment('');
            $table->integer('uid')->default(-1)->comment('');
            $table->string('summary')->default('')->comment('概要');
            $table->integer('view_cnt')->default(-1)->comment('浏览次数');
            $table->integer('up_cnt')->default(-1)->comment('赞');
            $table->integer('ding_cnt')->default(-1)->comment('顶');
            $table->integer('down_cnt')->default(-1)->comment('down');
            $table->string('comment_cnt')->default(-1)->comment('评论');
            $table->integer('locked_yn')->default(-1)->comment('锁');
            $table->integer('display_yn')->default(-1)->comment('是否显示');
            $table->integer('top_yn')->default(-1)->comment('');
            $table->integer('marrow_yn')->default(-1)->comment('是否精华');
            $table->integer('waterfall_yn')->default(-1)->comment('是否为瀑布流');
            $table->integer('related_id')->default(-1)->comment('关联id');
            $table->string('sys')->default('')->comment('系统');
            $table->string('sys_ver')->default('')->comment('版本');
            $table->string('anonymous')->default('')->comment('');
            $table->integer('lou')->default(-1)->comment('');
            $table->integer('score')->default(-1)->comment('');
            $table->integer('money')->default(-1)->comment('氧分');
            $table->integer('source')->default(-1)->comment('');
            $table->integer('forbid_uid')->default(-1)->comment('禁贴uid');
            $table->integer('del_uid')->default(-1)->comment('删除者');
            $table->integer('del_admin_id')->default(-1)->comment('删除者');
            $table->integer('private')->default(-1)->comment('是否私密发帖');
            $table->integer('private_uid')->default(-1)->comment('私密uid');
            $table->string('cover_img')->default('')->comment('封面图片');
            $table->integer('img_cnt')->default(-1)->comment('图片数量');
            $table->integer('report_yn')->default(-1)->comment('是否为投诉帖子');
            $table->integer('calendar_type')->default(-1)->comment('是否为新的日记');
            $table->integer('topic_yn')->default(-1)->comment('是否讨论帖子 1是 -1否');
            $table->integer('pgc_yn')->default(-1)->comment('是否为pgc帖子 1是 -1否');
            $table->string('pgc_img')->default('')->comment('pgc图片');
            $table->integer('weight')->default(-1)->comment('人为权重');
            $table->string('down_time')->default('')->comment('沉帖时间');
            $table->string('lou_update_date')->default('')->comment('楼主最后更新时间');
            $table->string('sphinx_update')->default('')->comment('');
            $table->integer('event_id')->default(-1)->comment('关联活动id');
            $table->integer('reply_locked_yn')->default(-1)->comment('回帖锁，1表示锁 0不锁');
            $table->integer('post_video_yn')->default(-1)->comment('否为视频贴，1是 0不是');
            $table->string('post_video_img')->default('')->comment('视频封面');
            $table->string('post_video_url')->default('')->comment('视频地址');
            $table->integer('reward_yn')->default(-1)->comment('是否支持打赏:1 支持');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_post');
    }
}
