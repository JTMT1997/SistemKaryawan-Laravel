<?php

use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikan')->insert([
            'id' => '1',
            'pendidikan_terakhir' => 'SMA',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('pendidikan')->insert([
            'id' => '2',
            'pendidikan_terakhir' => 'S-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('pendidikan')->insert([
            'id' => '3',
            'pendidikan_terakhir' => 'S-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('pendidikan')->insert([
            'id' => '4',
            'pendidikan_terakhir' => 'S-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
