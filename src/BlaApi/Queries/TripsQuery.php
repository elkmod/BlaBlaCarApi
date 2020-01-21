<?php


namespace BlablacarShipping\BlaApi\Queries;


class TripsQuery
{
    /**
     * Departure place / from name
     *
     * @var string
     */
    private $fn;

    /**
     * Arrival place / to name
     *
     * @var string
     */
    private $tn;

    /**
     * Locale and associated currency (https://dev.blablacar.com/hc/en-us/articles/360008930020)
     *
     * @var string
     */
    private $locale;

    /**
     * Desired currency
     *
     * @var string
     */
    private $currency;

    /**
     * Date begin
     *
     * @var string
     */
    private $db;

    /**
     * Hour begin
     *
     * @var int
     */
    private $hb;

    /**
     * Hour end
     *
     * @var int
     */
    private $he;

    /**
     * Page
     *
     * @var int
     */
    private $page;

    /**
     * Number of requested available seats
     *
     * @var int
     */
    private $seats;

    /**
     * @return string
     */
    public function getFn(): string
    {
        return $this->fn;
    }

    /**
     * @param string $fn
     */
    public function setFn(string $fn): void
    {
        $this->fn = $fn;
    }

    /**
     * @return string
     */
    public function getTn(): string
    {
        return $this->tn;
    }

    /**
     * @param string $tn
     */
    public function setTn(string $tn): void
    {
        $this->tn = $tn;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb(string $db): void
    {
        $this->db = $db;
    }

    /**
     * @return int
     */
    public function getHb(): int
    {
        return $this->hb;
    }

    /**
     * @param int $hb
     */
    public function setHb(int $hb): void
    {
        $this->hb = $hb;
    }

    /**
     * @return int
     */
    public function getHe(): int
    {
        return $this->he;
    }

    /**
     * @param int $he
     */
    public function setHe(int $he): void
    {
        $this->he = $he;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
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
}
