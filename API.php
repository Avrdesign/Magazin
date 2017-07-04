<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/2/17
 * Time: 3:15 PM
 */
class API
{
    public static function getCurrency(){
        $needCurrency = [292, 145, 298]; // EUR, USD, RUR
        $jsonString = file_get_contents('http://www.nbrb.by/API/ExRates/Rates?Periodicity=0');
        $json = json_decode($jsonString, true);
        $currencies = array();
        foreach ($json as $currency) {
            if (in_array($currency['Cur_ID'], $needCurrency)){
                $currencies[] = $currency;
            }
        }
        return $currencies;
    }

    public static function getLocation(){
        $uri = 'http://api.sypexgeo.net/json/';
        $ip = self::getApiAddress();
        if ($ip != 'UNKNOWN'){
            $jsonString = file_get_contents($uri.$ip);
            return json_decode($jsonString, true);
        }else{
            return 'UNKNOWN';
        }
    }

    public static function getApiAddress(){
        return  isset($_SERVER['HTTP_CLIENT_IP']) ?
                $_SERVER['HTTP_CLIENT_IP'] :
                isset($_SERVER['HTTP_X_FORWARDED_FOR']) ?
                $_SERVER['HTTP_X_FORWARDED_FOR'] :
                isset($_SERVER['REMOTE_ADDR']) ?
                $_SERVER['REMOTE_ADDR']:
                'UNKNOWN';
    }
}