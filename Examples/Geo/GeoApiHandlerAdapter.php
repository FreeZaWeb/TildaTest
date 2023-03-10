<?php

namespace Examples\Geo;

abstract class GeoApiHandlerAdapter implements GeoApiHandlerInterface{

    abstract public function getCityName(string $ip) : string;

    //other methods

}
