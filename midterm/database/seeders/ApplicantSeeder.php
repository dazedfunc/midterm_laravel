<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicants')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'position' => Str::random(10),
            'phone' => 12345,
            'is_hired' => rand(0, 1)
        ]);
    }
}
