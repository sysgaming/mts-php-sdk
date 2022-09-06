<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResponse
{
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