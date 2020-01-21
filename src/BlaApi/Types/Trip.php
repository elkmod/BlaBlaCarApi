<?php declare(strict_types=1);

namespace BlablacarShipping\BlaApi\Types;

class Trip
{
    /** @var string */
    private $departure_date;

    /** @var Place */
    private $departure_place;

    /** @var Place */
    private $arrival_place;

    /** @var Place */
    private $departure_meeting_point;

    /** @var Price */
    private $price;

    /** @var int */
    private $seats;

    /** @var Value */
    private $distance;

    /** @var int */
    private $passengers;

    /**
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->departure_date;
    }

    /**
     * @param string $departure_date
     */
    public function setDepartureDate(string $departure_date): void
    {
        $this->departure_date = $departure_date;
    }

    /**
     * @return Place
     */
    public function getDeparturePlace(): Place
    {
        return $this->departure_place;
    }

    /**
     * @param Place $departure_place
     */
    public function setDeparturePlace(Place $departure_place): void
    {
        $this->departure_place = $departure_place;
    }

    /**
     * @return Place
     */
    public function getArrivalPlace(): Place
    {
        return $this->arrival_place;
    }

    /**
     * @param Place $arrival_place
     */
    public function setArrivalPlace(Place $arrival_place): void
    {
        $this->arrival_place = $arrival_place;
    }

    /**
     * @return Place
     */
    public function getDepartureMeetingPoint(): Place
    {
        return $this->departure_meeting_point;
    }

    /**
     * @param Place $departure_meeting_point
     */
    public function setDepartureMeetingPoint(Place $departure_meeting_point): void
    {
        $this->departure_meeting_point = $departure_meeting_point;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getSeats(): int
    {
        return $this->seats;
    }

    /**
     * @param int $seats
     */
    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    /**
     * @return Value
     */
    public function getDistance(): Value
    {
        return $this->distance;
    }

    /**
     * @param Value $distance
     */
    public function setDistance(Value $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getPassengers(): int
    {
        return $this->passengers;
    }

    /**
     * @param int $passengers
     */
    public function setPassengers(int $passengers): void
    {
        $this->passengers = $passengers;
    }
}
