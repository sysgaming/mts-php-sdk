<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class StakeDTO {

    /**
     * Valor da aposta
     * @var int
     */
    private $value;

    /**
     * Default: total
     * Enums: total, unit
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