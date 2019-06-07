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
        /** Groep kijken */

        // Schuim
        \App\Question::updateOrCreate(['name' => 'Schuim'],[
            'name' => 'Schuim',
            'type' => 'slide',
            'description' => 'Hoeveel schuim zie je? Heeft het schuim een fijne of een grove belletjes structuur?',
            'position' => 1,
            'possible_answers' => json_encode(['start' => 'Weinig', 'end' => 'Veel']),
            'group' => 'Kijken',
        ]);

        // Helderheid
        \App\Question::updateOrCreate(['name' => 'Helderheid'], [
            'name' => 'Helderheid',
            'type' => 'slide',
            'description' => 'Hoeveel helder of troebel is het bier?',
            'position' => 2,
            'possible_answers' => json_encode(['start' => 'Helder', 'end' => 'Troebel']),
            'group' => 'Kijken',
        ]);

        // Kleur
        \App\Question::updateOrCreate(['name' => 'Kleur'],[
            'name' => 'Kleur',
            'type' => 'multiple',
            'description' => 'Welke kleur is het bier?',
            'position' => 3,
            'possible_answers' => json_encode(['Geel', 'Oranje', 'Bruin']),
            'group' => 'Kijken',
        ]);

        /** Groep Ruiken */

        // intensiteit geuren
        \App\Question::updateOrCreate(['name' => 'Intensiteit geuren'],[
            'name' => 'Intensiteit geuren',
            'description' => 'Hoe intens zijn de kleuren',
            'type' => 'slide',
            'position' => 4,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'Ruiken',
        ]);

        // Fruitigheid
        \App\Question::updateOrCreate(['name' => 'Fruitigheid'],[
            'name' => 'Fruitigheid',
            'description' => 'Hoe fruitig is het bier? Denk aan tropisch',
            'type' => 'slide',
            'position' => 5,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Erg fruitig']),
            'group' => 'Ruiken',
        ]);

// toegevoegd door Simon
        // Moutig
        \App\Question::updateOrCreate(['name' => 'Moutig'],[
            'name' => 'Moutig',
            'description' => 'Hoe moutig is het bier? Denk aan graan, karamel, biscuit, zoetige boerderijgeur...',
            'type' => 'slide',
            'position' => 6,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Erg fruitig']),
            'group' => 'Ruiken',
        ]);

// toegevoegd door Simon
        // Kruidig
        \App\Question::updateOrCreate(['name' => 'Kruidig'],[
            'name' => 'Kruidig',
            'description' => 'Hoe kruidig is het bier? Denk aan specerijen zoals kaneel, peper etc.',
            'type' => 'slide',
            'position' => 7,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'Ruiken',
        ]);

// nog toevoegen
// Ruik je nog meer? zou een open vraag moeten worden
// 'description' => 'Bijvoorbeeld geroosterd, koffie, amandelen etc.',

// toegevoegd door Simon

        /** Groep Proeven */

        // zoet
        \App\Question::updateOrCreate(['name' => 'Zoet'],[
            'name' => 'Zoet',
            'description' => 'Hoe zoet is het bier?',
            'type' => 'slide',
            'position' => 8,
            'possible_answers' => json_encode(['start' => 'Weinig', 'end' => 'Veel']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // zuur
        \App\Question::updateOrCreate(['name' => 'Zuur'],[
            'name' => 'Zuur',
            'description' => 'Hoe zuur is het bier?',
            'type' => 'slide',
            'position' => 9,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // bitter
        \App\Question::updateOrCreate(['name' => 'Bitter'],[
            'name' => 'Bitter',
            'description' => 'Hoe bitter is het bier?',
            'type' => 'slide',
            'position' => 10,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // zout
        \App\Question::updateOrCreate(['name' => 'Zoutig'],[
            'name' => 'Zoutig',
            'description' => 'Hoe zout is het bier?',
            'type' => 'slide',
            'position' => 11,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Sterk']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // Body
        \App\Question::updateOrCreate(['name' => 'Body'],[
            'name' => 'Body',
            'description' => 'Hoeveel body heeft het bier?',
            'type' => 'slide',
            'position' => 12,
            'possible_answers' => json_encode(['start' => 'Licht', 'end' => 'Vol']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // koolzuur
        \App\Question::updateOrCreate(['name' => 'Koolzuur'],[
            'name' => 'Koolzuur',
            'description' => 'Hoeveel koolzuur zit er in het bier?',
            'type' => 'slide',
            'position' => 13,
            'possible_answers' => json_encode(['start' => 'Plat', 'end' => 'Bruisend']),
            'group' => 'Proeven',
        ]);

// toegevoegd door Simon
        // Afdronk
        \App\Question::updateOrCreate(['name' => 'Afdronk'],[
            'name' => 'Afdronk',
            'description' => 'Hoe is de afdronk van het bier?',
            'type' => 'slide',
            'position' => 14,
            'possible_answers' => json_encode(['start' => 'Kort', 'end' => 'Lang']),
            'group' => 'Proeven',
        ]);

        // nog toevoegen
        // Proef je nog meer? zou een open vraag moeten worden
        // 'description' => 'Bijvoorbeeld geroosterd, koffie, amandelen etc.',

        /** Groep Eindoordeel */

        // Eindoordeel
        \App\Question::updateOrCreate(['name' => 'Eindoordeel'],[
            'name' => 'Eindoordeel',
            'description' => 'Het belangrijkste: hoe luidt je Eindoordeel ?',
            'type' => 'slide',
            'position' => 15,
            'possible_answers' => json_encode(['start' => 'Onvoldoende', 'end' => 'Uitstekend']),
            'group' => 'Eindoordeel',
        ]);

    }

}