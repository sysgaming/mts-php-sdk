<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResponse
{
    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var MtsResultResponse
     */
    private $result;

    /**
     *
     */
    public function __construct()
    {
        $this->result = new MtsResultResponse();
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
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
    public function setResult(MtsResultResponse $result)
    {
        $this->result = $result;
        return $this;
    }

}