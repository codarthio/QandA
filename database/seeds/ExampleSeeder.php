<?php

use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $questions = [
            'WOULD YOU EAT A HAMBURGER IF IT WAS THE ONLY THING LEFT ON THIS PLANET TO EAT?',
            'AREN\'T YOU SAD YOU CAN\'T EAT MEAT?',
            'WAIT, WAIT, WAIT, HOW DO YOU SURVIVE WITHOUT EATING BACON?',
            'WAIT, SO YOU DON\'T EAT MEAT?',
            'THEN WHERE DO YOU GET YOUR PROTEIN FROM?',
            'SO YOU MUST LOVE ALL ANIMALS THEN, RIGHT?',
            'DO YOU HATE ME BECAUSE I EAT MEAT?',
            'WHAT\'S THE POINT WHEN THE ANIMALS ARE JUST GOING TO BE SLAUGHTERED ANYWAY?'
        ];

        foreach($questions as $example){

            \Illuminate\Support\Facades\DB::table('examples')->insert([
                'example' => $example
            ]);


        }
    }
}
