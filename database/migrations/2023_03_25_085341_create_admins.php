<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', '56')->comment('账号');
            $table->string('nick_name', '56')->comment('昵称');
            $table->tinyInteger('type')->default(0)->comment('类型：1:管理员，2：组长，3：客服');
            $table->unsignedSmallInteger('group_id')->default(0)->comment('类型：0：客服,1:管理员，2：组长，');
            $table->tinyInteger('online')->default(0)->comment('在线状态：1:在线，2：离线');
            $table->string('password');
            $table->string('job', '56')->comment('职位');
            $table->tinyInteger('logins')->default(0)->comment('登录次数');
            $table->tinyInteger('status')->default(1)->comment('是否禁用：0：禁用，1：启用');
            $table->string('lastip')->nullable();
            $table->timestamps();
            $table->unique('username', 'uni_un');
            $table->index('group_id', 'idx_grid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
