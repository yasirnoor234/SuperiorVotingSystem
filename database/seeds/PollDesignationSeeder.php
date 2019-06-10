<?php

use Illuminate\Database\Seeder;
use App\PollDesignation;

class PollDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(PollDesignation $pollDesignation)
    {
        DB::table('poll_designations')->insert([
            [
                'poll_designation_name' => 'SVL',
                'status' => '1',
            ]
        ]);
        DB::table('poll_designations')->insert([
            [
                'poll_designation_name' => 'SVL',
                'status' => '1',
            ]
        ]);
        DB::table('poll_designations')->insert([
            [
                'poll_designation_name' => 'CR',
                'status' => '1',
            ]
        ]);
        DB::table('poll_designations')->insert([
            [
                'poll_designation_name' => 'CR',
                'status' => '1',
            ]
        ]);

    }
}
