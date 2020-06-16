<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 12) as $number) {
            DB::table('page')->insert([
                'title' => Str::random(10)." $number",
                'content' => Str::random(100)." $number",
                'image' => Str::random(10),
                'is_active' => true,
            ]);
        }

        
    }
}
