<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResponse
{
    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var string
     */
    private $contents;

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
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }

}