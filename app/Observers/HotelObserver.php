<?php

namespace App\Observers;

use App\Models\Hotel;

class HotelObserver
{
    /**
     * Handle the hotel "created" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function created(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "creating" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function creating(Hotel $hotel)
    {
        $api_key = '336ea986ccba5c21aa0e105fd557f626';
        $endpoint = 'http://api.positionstack.com/v1/forward?';

        $hoteladdress = $hotel->address_1;

        $params = array(
            'access_key' => $api_key,
            'query' => $hoteladdress
        );

        $query_string = http_build_query($params);

        $json = file_get_contents($endpoint."?".$query_string);

        $data = json_decode($json);

        $data = $data->data[0];

        $hotellatitude = $data->latitude;
        $hotellongitude = $data->longitude;

        $hotel->lat = $hotellatitude;
        $hotel->lon = $hotellongitude;
    }

    /**
     * Handle the hotel "updated" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function updated(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function deleted(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "restored" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function restored(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "force deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function forceDeleted(Hotel $hotel)
    {
        //
    }
}
