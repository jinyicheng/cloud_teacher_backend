<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfKindergartenGradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[] = ['id' => 1, 'name' => '未定级'];
        $data[] = ['id' => 2, 'name' => '一级'];
        $data[] = ['id' => 3, 'name' => '二级'];
        $data[] = ['id' => 4, 'name' => '区示范'];
        $data[] = ['id' => 5, 'name' => '市示范'];
        DB::table('conf_kindergarten_grades')->insert($data);
    }
}
