<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

class MtsReofferResponse
{
    /**
     * @var int
     */
    private $stake;

    /**
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getStake()
    {
        return $this->stake;
    }

    /**
     * @param $stake
     * @return $this
     */
    public function setStake($stake)
    {
        $this->stake = $stake;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}