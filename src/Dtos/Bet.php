<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class Bet {
    /**
     * @var Stake
     */
    private $stake;

    /**
     * @var string
     */
    private $id;

    /**
     * array
     * @var int[]
     */
    private $selectedSystems;

    /**
     * @return Stake
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

    /**
     * @return int[]
     */
    public function getSelectedSystems() {
        return $this->selectedSystems;
    }

    /**
     * @param $selectedSystems
     * @return $this
     */
    public function setSelectedSystems($selectedSystems) {
        $this->selectedSystems = $selectedSystems;
        return $this;
    }

}