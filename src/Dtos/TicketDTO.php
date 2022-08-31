<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class TicketDTO
{
    /**
     * @var int
     */
    private $timestampUtc;

    /**
     * array
     * @var Bet[]
     */
    private $bets;

    /**
     * @var string
     */
    private $ticketId;

    /**
     * array
     * @var Selection[]
     */
    private $selections;

    /**
     * @var Sender
     */
    private $sender;

    /**
     * @var string
     */
    private $version;

    /**
     * @return int
     */
    public function getTimestampUtc()
    {
        return $this->timestampUtc;
    }

    /**
     * @param $timestampUtc
     * @return $this
     */
    public function setTimestampUtc($timestampUtc)
    {
        $this->timestampUtc = $timestampUtc;
        return $this;
    }

    /**
     * @return Bet[]
     */
    public function getBets()
    {
        return $this->bets;
    }

    /**
     * @param $bets
     * @return $this
     */
    public function setBets($bets)
    {
        $this->bets = $bets;
        return $this;
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
     * @return Selection[]
     */
    public function getSelections()
    {
        return $this->selections;
    }

    /**
     * @param $selections
     * @return $this
     */
    public function setSelections($selections)
    {
        $this->selections = $selections;
        return $this;
    }

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}