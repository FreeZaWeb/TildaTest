<?php

namespace Examples\Geo;
use Examples\Helpers\View;

class PhoneMiddleware{

    public function __construct() {

        $ip = $_SERVER['REMOTE_ADDR'];

        //rewrite ip for local
        //Moscow
        $ip = '5.255.255.88';
        //St Petersburg
        //$ip = '87.240.129.133';
        //Amsterdam
        //$ip = '216.58.212.174';



        $phoneDigits = (new GeoApi(new customApiHandler()))->getCityPhoneByIp($ip);

        View::getInstance()->regReplacement('DIGITS', $phoneDigits);

    }

}
