<?php

class MockNetwork implements INetwork{

    public function determineInternetConnection($domain, $port) {
        return true;
    }

    public function getGoogleDataFor($location, $connection) {
         
    }

}
