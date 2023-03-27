<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //清空表
        DB::table('groups')->truncate();

        // 管理员
       \App\Models\Group::create([
            'name' => '默认客服组',
            'desc' => '这是一个默认的客服组',
            'group_status' => 1,
            'sort' => 1, //
            'welcome' => '',
        ]);
    }
}
