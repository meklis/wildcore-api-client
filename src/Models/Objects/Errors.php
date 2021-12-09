<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class Errors
{

    /**
     * @var int
     */
    protected $inErrors;

    /**
     * @var int
     */
    protected $outErrors;

    /**
     * @var int
     */
    protected $inDiscards;

    /**
     * @var int
     */
    protected $outDiscards;

    /**
     * @return int
     */
    public function getInErrors(): int
    {
        return $this->inErrors;
    }

    /**
     * @param int $inErrors
     * @return Errors
     */
    public function setInErrors(int $inErrors): Errors
    {
        $this->inErrors = $inErrors;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutErrors(): int
    {
        return $this->outErrors;
    }

    /**
     * @param int $outErrors
     * @return Errors
     */
    public function setOutErrors(int $outErrors): Errors
    {
        $this->outErrors = $outErrors;
        return $this;
    }

    /**
     * @return int
     */
    public function getInDiscards(): int
    {
        return $this->inDiscards;
    }

    /**
     * @param int $inDiscards
     * @return Errors
     */
    public function setInDiscards(int $inDiscards): Errors
    {
        $this->inDiscards = $inDiscards;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutDiscards(): int
    {
        return $this->outDiscards;
    }

    /**
     * @param int $outDiscards
     * @return Errors
     */
    public function setOutDiscards(int $outDiscards): Errors
    {
        $this->outDiscards = $outDiscards;
        return $this;
    }


}
