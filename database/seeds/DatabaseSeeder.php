<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['name' => 'Mark',
                'comment' => 'Nice',
                'slug' => 'Hunter-Killer',],

            ['name' => 'Jack',
                'comment' => 'Good',
                'slug' => 'Venom',],

            ['name' => 'Jason',
                'comment' => 'Great',
                'slug' => 'Goosebumps-2:-Haunted-Halloween',]
        ]);
    }
}
