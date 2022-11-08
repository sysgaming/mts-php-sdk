<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

class ReasonRequiredException extends MtsClientException
{
    /**
     * ReasonRequiredException constructor.
     * @param string $message
     */
    public function __construct($message = "") {
        parent::__construct($message);
    }
}