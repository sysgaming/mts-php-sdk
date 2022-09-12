<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;

class UnknownMtsException extends MtsServerException {

    /**
     * UnknownMtsException constructor.
     * @param MtsResponse $mtsResponse
     */
    public function __construct($mtsResponse) {
        parent::__construct($mtsResponse);
    }

}