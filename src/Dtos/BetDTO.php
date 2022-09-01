<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

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
}