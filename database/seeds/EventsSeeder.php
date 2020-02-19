<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            'speed-coding', 'sentence', 'projet'
        ];
        for($i=0; $i<sizeof($events); $i++):
            DB::table('events')->insert([
                'name' => $events[$i],
                
            ]);
        endfor;
    }
}
