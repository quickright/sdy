<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDoctor extends Migration
{
            protected $connection="db_hd";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hd.tb_doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cn')->default('')->comment('中文名');
            $table->string('name_en')->default('')->comment('英文名');
            $table->string('name_short')->default('')->comment('简称');
            $table->string('email')->default('')->comment('email');
            $table->string('mobile')->default('')->comment('手机');
            $table->string('tel')->default('')->comment('座机');
            $table->integer('f_type')->default(-1)->comment('大夫类型');
            $table->integer('country_id')->default(0)->comment('国家');
            $table->integer('gender')->default(-1)->comment('性别 ，1男0女-1未知');
            $table->integer('f_status')->default(-1)->comment('状态');
            $table->integer('f_level')->default(-1)->comment('等级');
            $table->integer('studio_id')->default(-1)->comment('工作室');
            $table->integer('sole_id')->default(-1)->comment('角色');
            $table->integer('sort_record')->default(-1)->comment('排序');
            $table->integer('is_top')->default(-1)->comment('是否置顶');
            $table->integer('msg_id')->default(0)->comment('私信id');
            $table->integer('post_id')->default(0)->comment('帖子id');
            $table->integer('certified_id')->default(0)->comment('认证id');
            $table->string('certified_time')->default('0000-00-00')->comment('认证日期');
            $table->float('star_score')->default(0.0)->comment('打分');
            $table->integer('star_count')->default(0)->comment('星');
            $table->string('birthday')->default('0000-00-00')->comment('生日');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_hd.tb_doctor');
    }
}
