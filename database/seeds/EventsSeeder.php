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
            'speed-coding', 'sentence', 'projet', ''
        ];
        for($i=0; $i<5; $i++):
            DB::table('users')->insert([
                'name' => Str::random(5),
                
            ]);
        endfor;
    }
}
