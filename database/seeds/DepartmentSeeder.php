<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Department $department)
    {
        DB::table('departments')->insert([
            [
                'department_name' => 'CS',
                'status' => '1',
            ]
        ]);
        DB::table('departments')->insert([
            [
                'department_name' => 'CS',
                'status' => '1',
            ]
        ]);
        DB::table('departments')->insert([
            [
                'department_name' => 'IT',
                'status' => '1',
            ]
        ]);
        DB::table('departments')->insert([
            [
                'department_name' => 'IT',
                'status' => '1',
            ]
        ]);

    }
}
