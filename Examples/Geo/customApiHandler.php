<?php

namespace Examples\Geo;

class customApiHandler extends GeoApiHandlerAdapter{


    public function getCityName($ip) : string {

        $responseJson = file_get_contents('http://ip-api.com/json/'.$ip);
        $response = json_decode($responseJson, true);

        return $response['city'];

    }

}
