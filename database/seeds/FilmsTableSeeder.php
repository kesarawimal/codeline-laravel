<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            ['name' => 'Hunter Killer',
            'description' => 'American submarine Captain Joe Glass is on the hunt for a U.S. sub in distress in the Arctic Ocean. He soon learns that a secret Russian coup is in the offing, a conspiracy that threatens to dismantle the world order. With crew and country on the line, Glass must assemble an elite group of Navy SEALs to sneak through enemy waters, rescue the kidnapped Russian president and prevent World War III.',
            'realease_date' => '2018-10-27',
            'rating' => '4',
            'ticket_price' => '400',
            'country' => 'US',
            'photo' => '/storage/app/download.jpg',
            'slug' => 'Hunter-Killer',],

            ['name' => 'Venom',
            'description' => 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake\'s experiments, Eddie\'s body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom tries to control the new and dangerous abilities that Eddie finds so intoxicating.',
            'realease_date' => '2018-10-27',
            'rating' => '4',
            'ticket_price' => '400',
            'country' => 'US',
            'photo' => '/storage/app/download1.jpg',
            'slug' => 'Venom',],

            ['name' => 'Goosebumps 2: Haunted Halloween',
            'description' => 'While collecting junk one day, best friends Sonny and Sam meet Slappy, a mischievous talking dummy from an unpublished "Goosebumps" book by R.L. Stine. Hoping to start his own family, Slappy kidnaps Sonny\'s mother and brings all of his ghoulish friends back to life -- just in time for Halloween. As the sleepy town becomes overrun with monsters, witches and other mysterious creatures, Sonny joins forces with his sister, Sam and a kindly neighbor to save Sonny\'s mom and foil Slappy\'s plan.',
            'realease_date' => '2018-10-27',
            'rating' => '4',
            'ticket_price' => '400',
            'country' => 'US',
            'photo' => '/storage/app/download2.jpg',
            'slug' => 'Goosebumps-2:-Haunted-Halloween',]
        ]);
    }
}
