<?php

use Illuminate\Database\Seeder;
use App\Classy;

class ClassySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Classy $classy)
    {
        DB::table('classies')->insert([
            [
                'department_id' =>1,
                'class_name' => '8A',
                'status' => '1',
            ]
        ]);
        DB::table('classies')->insert([
            [
                'department_id' =>2,
                'class_name' => '8B',
                'status' => '1',
            ]
        ]);
        DB::table('classies')->insert([
            [
                'department_id' =>3,
                'class_name' => '8C',
                'status' => '1',
            ]
        ]);
        DB::table('classies')->insert([
            [
                'department_id' =>4,
                'class_name' => '8D',
                'status' => '1',
            ]
        ]);
    }
}
