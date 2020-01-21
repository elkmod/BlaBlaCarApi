<?php declare(strict_types=1);

namespace BlablacarShipping\BlaApi;

use BlablacarShipping\BlaApi\Queries\TripQuery;
use BlablacarShipping\BlaApi\Queries\TripsQuery;

interface TripsClientInterface
{
    public function getTrips(TripsQuery $query);

    public function getTrip(TripQuery $query);
}
