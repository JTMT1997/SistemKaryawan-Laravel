<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'id' => '1',
            'nama_status' => 'Magang',
            'slug' => 'Magang',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('status')->insert([
            'id' => '2',
            'nama_status' => 'Probation',
            'slug' => 'Probation',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('status')->insert([
            'id' => '3',
            'nama_status' => 'Tetap',
            'slug' => 'Tetap',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('status')->insert([
            'id' => '4',
            'nama_status' => 'Kontrak',
            'slug' => 'Kontrak',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
