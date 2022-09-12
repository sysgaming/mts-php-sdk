<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;

class MtsServerException extends MtsGenericException
{
    /**
     * @var MtsResponse
     */
    private $mtsResponse;

    /**
     * MtsException constructor.
     * @param MtsResponse $mtsResponse
     */
    public function __construct($mtsResponse)  {
        parent::__construct($mtsResponse->getMessage(), $mtsResponse->getCode());
        $this->mtsResponse = $mtsResponse;
    }

    /**
     * @return MtsResponse
     */
    public function getMtsResponse()
    {
        return $this->mtsResponse;
    }

}