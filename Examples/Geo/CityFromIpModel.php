<?php

namespace Examples\Geo;

class CityFromIpModel{

    private bool $inCache = false;

    private array $data = [
        '192.168.0.1'   => 'Moscow',
        '10.10.0.1'     => 'Moscow',
    ];

    /** @return string|null */
    public function GetCityByIp(string $ip){
        return $this->data[$ip] ?? null;
    }

    //database save
    public function addNewCityFromIP($cityName, $ip) : void{
        $this->data[$ip] = $cityName;
    }


}
