<?php declare(strict_types=1);

namespace BlablacarShipping\Controller;

use BlablacarShipping\BlaApi\Queries\TripsQuery;
use BlablacarShipping\BlaApi\TripsClientInterface;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TripsController
 * @package BlablacarShipping\Controller
 *
 * @RouteScope(scopes={"sales-channel-api"})
 */
class TripsController extends AbstractController
{
    /**
     * @var TripsClientInterface
     */
    private $tripsClient;

    public function __construct(TripsClientInterface $tripsClient)
    {
        $this->tripsClient = $tripsClient;
    }

    /**
     * @Route("/sales-channel-api/v{version}/bla/trips", name="sales-channel-api.blablacar_shipping.trips.list", methods={"GET"})
     */
    public function trips(Request $request): JsonResponse
    {
        $query = $this->buildTripsQuery($request);

        $blaReponse = $this->tripsClient->getTrips($query);

        return new JsonResponse([
            'trips' => $blaReponse['trips']
        ]);
    }

    private function buildTripsQuery(Request $request): TripsQuery
    {
        $query = new TripsQuery();

        $query->setFn($request->get('from', 'Berlin'));
        $query->setTn($request->get('to', 'Hamburg'));

        $query->setDb($request->get('earliest_date', date('Y-m-d')));
        $query->setHb((int)$request->get('earliest_hour', date('G')));
        $query->setHe((int)$request->get('latest_hour', date('h', time() + (3600 * 3))));

        $query->setLocale('DE_de');
        $query->setCurrency('EUR');

        $query->setSeats((int)$request->get('seats', 1));

        $query->setPage((int)$request->get('page', 1));

        return $query;
    }
}
