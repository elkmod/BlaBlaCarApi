<?php declare(strict_types=1);

namespace BlablacarShipping\BlaApi;

use BlablacarShipping\BlaApi\Queries\TripQuery;
use BlablacarShipping\BlaApi\Queries\TripsQuery;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripsClient extends Client implements TripsClientInterface
{
    private $apiKey;

    private $apiHost = 'https://public-api.blablacar.com/api/v2';

    public function __construct($apiKey = '')
    {
        parent::__construct();

        $this->apiKey = $apiKey;
    }

    /**
     * Returns a list of trips
     *
     * @param TripsQuery $query
     */
    public function getTrips(TripsQuery $query)
    {
        $queryString = http_build_query([
            'key' => $this->apiKey,
            'fn' => $query->getFn(),
            'tn' => $query->getTn(),
            'locale' => $query->getLocale(),
            'cur' => $query->getCurrency(),
            'db' => $query->getDb(),
            'hb' => $query->getHb(),
            'he' => $query->getHe(),
            'page' => $query->getPage(),
            'seats' => $query->getSeats()
        ]);

        try {

            /** @var ResponseInterface $response */
            $response = $this->get($this->getBaseUrl() . '/trips?' . $queryString);

        } catch (RequestException $exception)
        {
            return json_decode($exception->getMessage());
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Returns details for a specific trip
     *
     * @param TripQuery $query
     */
    public function getTrip(TripQuery $query)
    {
        return [];
    }

    private function getBaseUrl()
    {
        return $this->apiHost;
    }
}
