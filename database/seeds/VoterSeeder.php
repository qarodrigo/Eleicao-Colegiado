<?php

use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voters')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'registration' => Str::random(8),
            // 'password' => Hash::make('password'),
            'present' => (false),
        ]);
    }
}
