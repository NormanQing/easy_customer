<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('admin_id')->comment('服务的客服');
            $table->unsignedInteger('group_id')->comment('服务的客服组');
            $table->unsignedInteger('upload')->default(0)->comment('上传文件授权');
            $table->unsignedInteger('login_times')->comment('登录次数');
            $table->timestamp('last_time')->nullable()->comment('最后登录时间');
            $table->string('last_ip')->comment('最后登录ip');
            $table->string('ip_zone');
            $table->string('browser');
            $table->tinyInteger('is_mobile')->default(0)->comment('手机端：1：是，0否');
            $table->string('from_url')->comment('来源地址');
            $table->tinyInteger('grade');
            $table->string('name',34)->nullable();
            $table->string('remark')->nullable();
            $table->string('session')->default('')->comment('会话id');
            $table->tinyInteger('guest_status')->default(1)->comment('状态：0：禁用，1：正常');
            $table->timestamps();
            $table->index('admin_id','idx_aid');
            $table->index('group_id','idx_gid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
