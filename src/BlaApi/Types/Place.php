<?php


namespace BlablacarShipping\BlaApi\Types;


class Place
{
    /** @var string */
    private $city_name;

    /** @var string */
    private $address;

    /** @var float */
    private $latitude;

    /** @var float */
    private $longitude;

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->city_name;
    }

    /**
     * @param string $city_name
     */
    public function setCityName(string $city_name): void
    {
        $this->city_name = $city_name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }
}
