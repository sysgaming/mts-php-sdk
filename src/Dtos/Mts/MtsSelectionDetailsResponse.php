<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsSelectionDetailsResponse
{
    /**
     * @var int
     */
    private $selectionIndex;

    /**
     * @var MtsReasonResponse
     */
    private $reason;

    /**
     * @var MtsRejectionInfoResponse
     */
    private $rejectionInfo;

    /**
     * @return int
     */
    public function getSelectionIndex()
    {
        return $this->selectionIndex;
    }

    /**
     * @param $selectionIndex
     * @return $this
     */
    public function setSelectionIndex($selectionIndex)
    {
        $this->selectionIndex = $selectionIndex;
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
     * @return MtsRejectionInfoResponse
     */
    public function getRejectionInfo()
    {
        return $this->rejectionInfo;
    }

    /**
     * @param MtsRejectionInfoResponse $rejectionInfo
     * @return $this
     */
    public function setRejectionInfo($rejectionInfo)
    {
        $this->rejectionInfo = $rejectionInfo;
        return $this;
    }
}