<?php


namespace BlablacarShipping\BlaApi\Types;


class Price
{
    /** @var int */
    private $value;

    /** @var string */
    private $currency;

    /** @var string */
    private $symbol;

    /** @var string */
    private $string_value;

    /** @var string */
    private $price_color;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
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
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getStringValue(): string
    {
        return $this->string_value;
    }

    /**
     * @param string $string_value
     */
    public function setStringValue(string $string_value): void
    {
        $this->string_value = $string_value;
    }

    /**
     * @return string
     */
    public function getPriceColor(): string
    {
        return $this->price_color;
    }

    /**
     * @param string $price_color
     */
    public function setPriceColor(string $price_color): void
    {
        $this->price_color = $price_color;
    }
}
