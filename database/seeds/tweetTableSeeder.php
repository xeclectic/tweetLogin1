<?php

use Illuminate\Database\Seeder;

class tweetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweet')->insert([
            'content' => Str::random(50),
            'author' => Str::random(10),
        ]);
    }
}
