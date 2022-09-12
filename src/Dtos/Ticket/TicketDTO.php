<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Ticket;

class TicketDTO
{
    /**
     * Horário de envio do ticket
     * @var int
     */
    private $timestampUtc;

    /**
     * Valores das bets
     * @var BetDTO[]
     */
    private $bets;


    /**
     * Código de aposta
     * @var string
     */
    private $ticketId;

    /**
     * Opções selecionadas
     * @var SelectionDTO[]
     */
    private $selections;

    /**
     * @var SenderDTO
     */
    private $sender;

    /**
     * Formato do ticket
     * opcional
     * @var string
     */
    private $version;

    /**
     * Default: higher
     * Enums: none, any, higher
     * @var string
     */
    private $oddChanged;

    /**
     *
     */
    public function __construct()
    {
        $this->bets = [];
        $this->selections = [];
    }

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
     * @return BetDTO[]
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
     * @return SelectionDTO[]
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
     * @return SenderDTO
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

    /**
     * @return string
     */
    public function getOddChanged()
    {
        return $this->oddChanged;
    }

    /**
     * @param $oddChanged
     * @return $this
     */
    public function setOddChanged($oddChanged)
    {
        $this->oddChanged = $oddChanged;
        return $this;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

    private function toArray()
    {
        $array = array();
        $array['timestampUtc'] = $this->timestampUtc;
        $array['bets'] = array();
        foreach ($this->bets as $bet) {
            $array['bets'][] = $bet->toArray();
        }
        $array['ticketId'] = $this->ticketId;
        $array['selections'] = array();
        foreach ($this->selections as $selection) {
            $array['selections'][] = $selection->toArray();
        }
        $array['sender'] = $this->sender->toArray();
        $array['version'] = $this->version;
        $array['oddChanged'] = $this->oddChanged;
        return $array;
    }

}