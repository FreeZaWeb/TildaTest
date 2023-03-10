<?php

namespace Examples\Geo;

interface GeoApiHandlerInterface{

    public function getCityName(string $ip) : string;

}
