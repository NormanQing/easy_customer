<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '56')->comment('名称');
            $table->string('desc')->nullable()->comment('描述');
            $table->string('group_status')->default(1)->comment('状态：0：禁用，1启用');
            $table->integer('sort')->default(1)->comment('排序');
            $table->string('welcome')->nullable()->comment('问候语');
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
        Schema::dropIfExists('groups');
    }
}
