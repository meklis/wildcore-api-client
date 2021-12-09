<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class CablePairDiag
{
    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $status;


    /**
     * @var int
     */
    protected $length;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return CablePairDiag
     */
    public function setNumber(int $number): CablePairDiag
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return CablePairDiag
     */
    public function setStatus(string $status): CablePairDiag
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return CablePairDiag
     */
    public function setLength(int $length): CablePairDiag
    {
        $this->length = $length;
        return $this;
    }


}
