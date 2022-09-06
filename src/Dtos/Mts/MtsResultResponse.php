<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsResultResponse
{
    /**
     * @var string
     */
    private $ticketId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var MtsReasonResponse
     */
    private $reason;

    /**
     * @var MtsBetDetailsResponse[]
     */
    private $betDetails;

    /**
     *
     */
    public function __construct()
    {
        $this->reason = new MtsReasonResponse();
        $this->betDetails = [];
    }

    /**
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param $ticketId
     * @return $this
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

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
     * @return MtsReasonResponse
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array|MtsBetDetailsResponse[]
     */
    public function getBetDetails()
    {
        return $this->betDetails;
    }

    /**
     * @param $betDetails
     * @return $this
     */
    public function setBetDetails($betDetails)
    {
        $this->betDetails = $betDetails;
        return $this;
    }
}