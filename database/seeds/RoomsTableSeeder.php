<?php

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rooms = [
            [
                'hotel_id' => '1',
                'type' => 'Luxury Suite',
                'description' => '2000 sqft, 3 king sized beds, full kitchen.',
                'price' => '980',
                'image' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => '1',
                'type' => 'Double',
                'description' => 'Two queen beds.',
                'price' => '200',
                'image' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => '2',
                'type' => 'Suite',
                'description' => 'International luxurious room.',
                'price' => '350',
                'image' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => '2',
                'type' => 'Economy',
                'description' => 'One queen bed, mini fridge.',
                'price' => '87.99',
                'image' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => '3',
                'type' => 'Suite',
                'description' => 'One ultra wide king bed, full kitchen.',
                'price' => '399',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
        ];

        //Loops through array, creates a room using the model, mass assign (based on loop from HotelsTableSeeder.php)
        foreach ($rooms as $room)
        {
            Room::create(array(
            'hotel_id' => $room['hotel_id'],
            'type' => $room['type'],
            'description' => $room['description'],
            'price' => $room['price'],
            'image' => $room['image']
            ));
        }//end foreach

    }
}
