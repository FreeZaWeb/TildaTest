<?php

namespace Examples\Geo;

class GeoApi{

    private PhoneForCityModel $PhoneForCityModel;
    private CityFromIpModel $CityFromIpModel;
    private GeoApiHandlerInterface $apiHandler;

    public function __construct(GeoApiHandlerInterface $apiHandler) {

        $this->apiHandler = new $apiHandler();
        $this->CityFromIpModel = new CityFromIpModel();
        $this->PhoneForCityModel = new PhoneForCityModel();

    }

    public function getCityPhoneByIp(string $ip) : string{

        //default phone from config
        $defaultPhone = '555-35-35';

        $cityName = $this->CityFromIpModel->GetCityByIp($ip);

        if($cityName == null){
            $cityName = $this->apiHandler->getCityName($ip);
            $this->CityFromIpModel->addNewCityFromIP($cityName, $ip);
        }

        $phone = $this->getPhoneByCityName($cityName);

        return $phone ?? $defaultPhone;

    }

    /** @return string|null */
    private function getPhoneByCityName($cityName){
        return $this->PhoneForCityModel->GetPhoneDigitsByCityName($cityName) ?? null;
    }


    //other facade methods


}
