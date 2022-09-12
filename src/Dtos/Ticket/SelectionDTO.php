<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Ticket;

class SelectionDTO {

    const BET_SCOPE_LIVE = 'LIVE';
    const BET_SCOPE_PREMATCH = 'PREMATCH';

    /**
     * Event ID
     * @var string
     */
    private $eventId;

    /**
     * Odd ID
     * @var string
     */
    private $id;


    /**
     * Odd Price
     * @var int
     */
    private $odds;

    /**
     * Spoort ID
     * @var int
     */
    private $sportId;

    /**
     * LIVE | PREMATCH
     * @var string
     */
    private $betScope;

    /**
     * @return string
     */
    public function getEventId() {
        return $this->eventId;
    }

    /**
     * @param $eventId
     * @return $this
     */
    public function setEventId($eventId) {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOdds() {
        return $this->odds;
    }

    /**
     * @param $odds
     * @return $this
     */
    public function setOdds($odds) {
        $this->odds = $odds;
        return $this;
    }

    /**
     * @return int
     */
    public function getSportId() {
        return $this->sportId;
    }

    /**
     * @param $sportId
     * @return $this
     */
    public function setSportId($sportId) {
        $this->sportId = $sportId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBetScope()
    {
        return $this->betScope;
    }

    /**
     * @param string $betScope
     * @return $this
     */
    public function setBetScope($betScope)
    {
        $this->betScope = $betScope;
        return $this;
    }

    public function toArray()
    {
        return [
            'eventId' => $this->getEventId(),
            'id' => $this->getId(),
            'odds' => $this->getOdds(),
            'sportId' => $this->getSportId(),
            'betScope' => $this->getBetScope(),
        ];
    }
}