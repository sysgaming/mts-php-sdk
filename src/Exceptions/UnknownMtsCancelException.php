<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsCancelResponse;

class UnknownMtsCancelException extends MtsGenericException
{
    /**
     * UnknownMtsException constructor.
     * @param MtsCancelResponse $mtsResponse
     */
    public function __construct($mtsResponse) {
        parent::__construct($mtsResponse);
    }
}