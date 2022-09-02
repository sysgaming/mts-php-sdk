<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Ticket;

class EndConstumerDTO {
    /**
     * @var string
     */
    private $ip;

    /**
     * ES
     * @var string
     */
    private $languageId;

    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * @param $ip
     * @return $this
     */
    public function setIp($ip) {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageId() {
        return $this->languageId;
    }

    /**
     * @param $languageId
     * @return $this
     */
    public function setLanguageId($languageId) {
        $this->languageId = $languageId;
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

    public function toArray()
    {
        return [
            'ip' => $this->getIp(),
            'languageId' => $this->getLanguageId(),
            'id' => $this->getId(),
        ];
    }

}