<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        DB::table('jobs')->insert([
            'job_title' => $faker->text(10), 
            'job_description' => $faker->text,
            'job_posted_by'=>1
        ]);
        }
    }
}
