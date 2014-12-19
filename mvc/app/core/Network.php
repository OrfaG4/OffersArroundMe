<?php
class Network {
    
    public function determineInternetConnection($domain, $port){
        $connected = @fsockopen($domain, $port);
        
        if($connected){
            $connection = true;
            fclose($connected);
        }else{
            $connection = false;
        }
        return $connection;
    }
    
    public function getGoogleDataFor($location, $connection){
        if($connection){
            $url = "http://maps.google.com/maps/api/geocode/json?address=$location&sensor=false&region=GR";
            $response = file_get_contents($url);
        }else{
            $response = NULL;
        }
        return $response;
    }
}
?>