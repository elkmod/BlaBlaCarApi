<?php


namespace BlablacarShipping\BlaApi\Types;


class Value
{
    /** @var int */
    private $value;

    /** @var string */
    private $unity;

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
    public function getUnity(): string
    {
        return $this->unity;
    }

    /**
     * @param string $unity
     */
    public function setUnity(string $unity): void
    {
        $this->unity = $unity;
    }
}
