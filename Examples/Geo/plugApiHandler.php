<?php

namespace Examples\Geo;

class plugApiHandler extends GeoApiHandlerAdapter{


    public function getCityName($ip) : string {

        //default city
        return 'Moscow';

    }

}
