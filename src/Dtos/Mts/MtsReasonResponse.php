<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsReasonResponse
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}