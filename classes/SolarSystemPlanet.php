<?php

class SolarSystemPlanet extends Planet
{
    private $distance_from_the_sun;

    public function __construct($name, $diameter, $inhabited,  $distance_from_the_sun)
    {
        parent::__construct($name, $diameter, $inhabited);
        $this->distance_from_the_sun = $distance_from_the_sun;
    }

    public function getdistance_from_the_sun()
    {
        return $this->distance_from_the_sun;
    }

    public function setdistance_from_the_sun($distance_from_the_sun)
    {
        $this->distance_from_the_sun = $distance_from_the_sun;
    }
}
