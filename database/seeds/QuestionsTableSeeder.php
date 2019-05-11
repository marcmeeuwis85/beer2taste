<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Group kijken
         */

        // Schuim
        \App\Question::create([
            'name' => 'Schuim',
            'type' => 'slide',
            'description' => 'Hoeveel schuim zie je?',
            'position' => 1,
            'possible_answers' => json_encode(['start' => 'Weinig', 'end' => 'Veel']),
            'group' => 'Kijken',
        ]);

        // Helderheid
        \App\Question::create([
            'name' => 'Helderheid',
            'type' => 'slide',
            'description' => 'Hoeveel helder of troebel is het bier?',
            'position' => 2,
            'possible_answers' => json_encode(['start' => 'Helder', 'end' => 'Troebel']),
            'group' => 'Kijken',
        ]);

        // Kleur
        \App\Question::create([
            'name' => 'Kleur',
            'type' => 'multiple',
            'description' => 'Welke kleur is het bier?',
            'position' => 3,
            'possible_answers' => json_encode(['Geel', 'Oranje', 'Bruin']),
            'group' => 'Kijken',
        ]);

        /** Groep ruiken */
        // intensiteit geuren
        \App\Question::create([
            'name' => 'Intensiteit geuren',
            'description' => 'Hoe intens zijn de kleuren',
            'type' => 'slide',
            'position' => 4,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'ruiken',
        ]);

        // Fruitigheid
        \App\Question::create([
            'name' => 'Fruitigheid',
            'description' => 'Hoe fruitig is het bier?',
            'type' => 'slide',
            'position' => 5,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Erg fruitig']),
            'group' => 'ruiken',
        ]);

        /** Groep proeven */
        // zoet
        \App\Question::create([
            'name' => 'Zoet',
            'description' => 'Hoe zoet is het bier?',
            'type' => 'slide',
            'position' => 6,
            'possible_answers' => json_encode(['start' => 'Weinig', 'end' => 'Veel']),
            'group' => 'proeven',
        ]);

        // zuur
        \App\Question::create([
            'name' => 'Zuur',
            'description' => 'Hoe zuur is het bier?',
            'type' => 'slide',
            'position' => 7,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'proeven',
        ]);

        /** Eindoordeel */
        // Eindoordeel
        \App\Question::create([
            'name' => 'Eindoordeel',
            'description' => 'Het belangrijkste: hoe luidt het eindoordeel ?',
            'type' => 'slide',
            'position' => 8,
            'possible_answers' => json_encode(['start' => 'Onvoldoende', 'end' => 'Uitstekend']),
            'group' => 'eindoordeel',
        ]);
    }
}
