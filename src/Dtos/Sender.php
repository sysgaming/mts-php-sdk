<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class Sender {
    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $bookmakerId;

    /**
     * @var EndCustomer
     */
    private $endCustomer;

    /**
     * @var int
     */
    private $limitId;

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param $currency
     * @return $this
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * @param $channel
     * @return $this
     */
    public function setChannel($channel) {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookmakerId() {
        return $this->bookmakerId;
    }

    /**
     * @param $bookmakerId
     * @return $this
     */
    public function setBookmakerId($bookmakerId) {
        $this->bookmakerId = $bookmakerId;
        return $this;
    }

    /**
     * @return EndCustomer
     */
    public function getEndCustomer() {
        return $this->endCustomer;
    }

    /**
     * @param $endCustomer
     * @return $this
     */
    public function setEndCustomer($endCustomer) {
        $this->endCustomer = $endCustomer;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitId() {
        return $this->limitId;
    }

    /**
     * @param $limitId
     * @return $this
     */
    public function setLimitId($limitId) {
        $this->limitId = $limitId;
        return $this;
    }


}