<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hd.tb_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cn')->default('')->comment('中文');
            $table->string('name_en')->default('')->comment('英文');
            $table->string('login_mobile')->default('')->comment('');
            $table->string('user_name')->default('')->comment('用户名');
            $table->string('user_name_crc32')->default('')->comment('');
            $table->integer('user_type')->default(1)->comment('用户类型');
            $table->string('f_status')->default('')->comment('用户状态');
            $table->integer('active')->default(0)->comment('是否激活');
            $table->string('password')->default('')->comment('密码');
            $table->string('password_encrypt')->default('')->comment('密码加密');
            $table->string('ran_token')->default('')->comment('校验cookie token');
            $table->integer('gender')->default(0)->comment('性别');
            $table->string('avatar')->default('')->comment('头像');
            $table->string('birthday')->default('')->comment('生日');
            $table->string('province_id')->default('')->comment('');
            $table->string('city_id')->default('')->comment('');
            $table->string('district_id')->default('')->comment('');
            $table->string('ban_yn')->default('')->comment('禁言');
            $table->string('gag_yn')->default('')->comment('限时禁言');
            $table->string('gag_start_time')->default('')->comment('限时禁言开始时间');
            $table->string('gag_end_time')->default('')->comment('限时禁言结束时间');
            $table->string('certified_type')->default('')->comment('');
            $table->string('certified_id')->default('')->comment('');
            $table->string('sys')->default('')->comment('系统');
            $table->string('app_id')->default('')->comment('应用ID');
            $table->string('device_id')->default('')->comment('设备id');
            $table->string('msg_id')->default('')->comment('推送信息ID');
            $table->string('last_active_time')->default('')->comment('最后活跃时间');
            $table->string('update_token_yn')->default('')->comment('是否更新了token：1是0否');
            $table->string('hx_id')->default('')->comment('环信id');
            $table->string('hx_password')->default('')->comment('环信通讯密码');
            $table->string('create_ip')->default('')->comment('注册IP');
            $table->string('xysource')->default('')->comment('来源渠道');
            $table->integer('isbind')->default(0)->comment('是否绑定 0 未 1已');
            $table->string('countrycode')->default('')->comment('国家码');
            $table->string('sphinx_update')->default('')->comment('最后更新时间'); 
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
        Schema::dropIfExists('db_hd.tb_user');
    }
}
