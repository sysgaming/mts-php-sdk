<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class Stake {
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}