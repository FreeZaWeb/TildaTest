<?php


namespace Examples\Geo;

class PhoneForCityModel {

    private array $data = [
        'Moscow' => '555-35-35',
        'St Petersburg' => '111-00-11',
        'Amsterdam' => '222-00-22',
    ];

    /** @return string|null */
    public function GetPhoneDigitsByCityName(string $cityName){
        return $this->data[$cityName] ?? null;
    }

}
