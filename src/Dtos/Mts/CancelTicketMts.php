<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class CancelTicketMts
{
    /**
     * Código de aposta
     * @var string
     */
    private $ticketId;

    /**
     * Razão do cancelamento, possíveis:
     * CustomerTriggeredPrematch(101),
     * TimeoutTriggered(102),
     * BookmakerBackofficeTriggered(103),
     * BookmakerTechnicalIssue(104),
     * ExceptionalBookmakerTriggered(105),
     * BookmakerCashbackPromotionCancellation(106),
     * SogeiTriggered(301),
     * SccsTriggered(302);
     * @return int
     */
    private $ticketCancellationReason;

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
     * @return int
     */
    public function getTicketCancellationReason()
    {
        return $this->ticketCancellationReason;
    }

    /**
     * @param $ticketCancellationReason
     * @return $this
     */
    public function setTicketCancellationReason($ticketCancellationReason)
    {
        $this->ticketCancellationReason = $ticketCancellationReason;
        return $this;
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * @return array
     */
    private function toArray()
    {
        return [
            'ticketId' => $this->getTicketId(),
            'reason' => $this->getTicketCancellationReason()
        ];
    }
}