<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsBetDetailsResponse
{

    /**
     * @var string
     */
    private $betId;

    /**
     * @var MtsReasonResponse
     */
    private $reason;

    /**
     * @var MtsRejectionInfoResponse[]
     */
    private $selectionDetails;

    /**
     * @var MtsReofferResponse
     */
    private $reoffer;

    /**
     * @return string
     */
    public function getBetId()
    {
        return $this->betId;
    }

    /**
     * @param $betId
     * @return $this
     */
    public function setBetId($betId)
    {
        $this->betId = $betId;
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
     * @param MtsReasonResponse $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return MtsRejectionInfoResponse[]
     */
    public function getSelectionDetails()
    {
        return $this->selectionDetails;
    }

    /**
     * @param array $selectionDetails
     * @return $this
     */
    public function setSelectionDetails(array $selectionDetails)
    {
        $this->selectionDetails = $selectionDetails;
        return $this;
    }

    /**
     * @return MtsReofferResponse
     */
    public function getReoffer()
    {
        return $this->reoffer;
    }

    /**
     * @param MtsReofferResponse $reoffer
     * @return $this
     */
    public function setReoffer($reoffer)
    {
        $this->reoffer = $reoffer;
        return $this;
    }
}