<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beers = ['Heineken', 'Grolsch', 'Jopen Mooie Nel', 'La Chouffe Blond', 'Texels Skuumkoppe'];
        foreach($beers as $beer){
            \App\Beer::create([
                'name' => $beer
            ]);
        }
    }
}
