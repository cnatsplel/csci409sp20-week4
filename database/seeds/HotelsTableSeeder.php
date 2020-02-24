<?php

//Load Hotel Model
use App\Models\Hotel;

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of specific hotels to populate database
        $hotels = [
            [
                'name' => 'Port Orleans French Quarter',
                'address_1' => '2201 Orleans Drive',
                'city' => 'Orlando',
                'state' => 'FL',
                'zip' => '32830',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'Compass Cove Ocean Front Resort',
                'address_1' => '2311 S Ocean Blvd',
                'city' => 'Myrtle Beach',
                'state' => 'SC',
                'zip' => '29577',
                'description' => 'Luxurious ocean front hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'The Embassy Row Hotel',
                'address_1' => '2015 Massachusetts Ave NW',
                'city' => 'Washington',
                'state' => 'DC',
                'zip' => '20036',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        //Loop through hotels array and create a hotel using the hotel model and mass assignment
        foreach ($hotels as $hotel) {
            Hotel::create(array(
                'name' => $hotel['name'],
                'address_1' => $hotel['address_1'],
                'city' => $hotel['city'],
                'state' => $hotel['state'],
                'zip' => $hotel['zip'],
                'description' => $hotel['description'],
                'image' => $hotel['image']
            ));
        }
    }
}
