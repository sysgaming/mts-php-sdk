<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResponse
{

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $mtsCode;

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;


    /**
     *
     */
    public function __construct(){}


    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getMtsCode()
    {
        return $this->mtsCode;
    }

    /**
     * @param int $mtsCode
     */
    public function setMtsCode($mtsCode)
    {
        $this->mtsCode = $mtsCode;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}