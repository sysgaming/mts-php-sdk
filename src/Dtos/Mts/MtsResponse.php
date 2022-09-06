<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResponse
{
    /**
     * @var MtsResultResponse
     */
    private $result;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $signature;

    /**
     * @var int
     */
    private $exchangeRate;

    /**
     *
     */
    public function __construct()
    {
        $this->result = new MtsResultResponse();
    }

    /**
     * @return MtsResultResponse
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param MtsResultResponse $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param $signature
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return int
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

}