<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //清空表
        DB::table('admins')->truncate();

        // 管理员
        $admin = Admin::create([
            'username' => 'root',
            'nick_name' => '超级管理员',
            'type' => 1,
            'group_id' => 1, // 默认组
            'password' => bcrypt('123456'),
            'job' => '系统管理员',
        ]);
    }
}
