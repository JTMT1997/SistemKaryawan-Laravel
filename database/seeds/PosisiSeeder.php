<?php

use Illuminate\Database\Seeder;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posisi')->insert([
            'id' => '1',
            'jabatan' => 'Web Developer',
            'gaji'=>'6000000',
            'slug' => 'Web Developer',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('posisi')->insert([
            'id' => '2',
            'jabatan' => 'Android Developer',
            'gaji'=>'8000000',
            'slug' => 'Android Developer',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
