<?php


class Geolocalisable {
    protected $latitude;
    protected $longitude;

    public function locate(){
        return "je suis a $this->latitude, $this->longitude <br>";
    }
}