<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsCancelResponse
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $cancelCode;

    /**
     * @var string
     */
    private $friendlyMessage;

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
    public function getCancelCode()
    {
        return $this->cancelCode;
    }

    /**
     * @param int $cancelCode
     * @return $this
     */
    public function setCancelCode($cancelCode)
    {
        $this->cancelCode = $cancelCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyMessage()
    {
        return $this->friendlyMessage;
    }

    /**
     * @param $friendlyMessage
     * @return $this
     */
    public function setFriendlyMessage($friendlyMessage)
    {
        $this->friendlyMessage = $friendlyMessage;
        return $this;
    }

}