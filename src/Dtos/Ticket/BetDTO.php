<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Ticket;

class BetDTO {
    /**
     * @var StakeDTO
     */
    private $stake;

    /**
     * ID opcional
     * @var string
     */
    private $id;

    /**
     * @return StakeDTO
     */
    public function getStake() {
        return $this->stake;
    }

    /**
     * @param $stake
     * @return $this
     */
    public function setStake($stake) {
        $this->stake = $stake;
        return $this;
    }

    /**
     *
     */
    public function __construct()
    {
        $this->stake = new StakeDTO();
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

    public function toArray()
    {
        return [
            'stake' => $this->getStake()->toArray(),
            'id' => $this->getId(),
        ];
    }
}