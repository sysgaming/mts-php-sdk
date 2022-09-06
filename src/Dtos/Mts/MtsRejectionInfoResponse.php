<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsRejectionInfoResponse
{
    /**
     * @var string
     */
    private $eventId;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $odds;

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $eventId
     * @return $this
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOdds()
    {
        return $this->odds;
    }

    /**
     * @param $odds
     * @return $this
     */
    public function setOdds($odds)
    {
        $this->odds = $odds;
        return $this;
    }

}