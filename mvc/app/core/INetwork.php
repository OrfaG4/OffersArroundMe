<?php

interface INetwork {
    public function determineInternetConnection($domain, $port);
    public function getGoogleDataFor($location, $connection);
}
