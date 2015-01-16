<?php

class MockFailedNetwork implements INetwork {
    public function determineInternetConnection($domain, $port) {
        return false;
    }

    public function getGoogleDataFor($location, $connection) {
        
    }

}
