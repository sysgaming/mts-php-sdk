<?php

namespace Sysgaming\MtsPhpSdk\Dtos;

class SenderDTO {
    /**
     * PYG
     * @var string
     */
    private $currency;

    /**
     * Depende de onde a aposta está entrando
     * Enums: internet, retail, terminal, mobile
     * sms, callCentre, agent, tvApp
     * @var string
     */
    private $channel;

    /**
     * @var EndCustomerDTO
     */
    private $endCustomer;

    /**
     * @var int
     */
    private $limitId;

    /**
     * ID do vendedor/oficina/terminal(auto atendimento)
     * @var string
     */
    private $terminalId;

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

    /**
     * @return string
     */
    public function getTerminalId() {
        return $this->terminalId;
    }

    /**
     * @param $terminalId
     * @return $this
     */
    public function setTerminalId($terminalId) {
        $this->terminalId = $terminalId;
        return $this;
    }

}