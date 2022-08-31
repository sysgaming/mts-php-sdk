<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class Selection {
    /**
     * @var string
     */
    private $ventide;

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
    public function getVentide() {
        return $this->ventide;
    }

    /**
     * @param $ventide
     * @return $this
     */
    public function setVentide($ventide) {
        $this->ventide = $ventide;
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
}