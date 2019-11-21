<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Room::class,50)->create()->each(function ($room){
        $photos = factory(App\Photo::class,6)->make();
        $room->photos()->saveMany($photos);
       }); 
    }
}
