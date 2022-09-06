<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

class UnknownMtsException extends MtsException {

    /**
     * UnknownMtsException constructor.
     * @param string $message
     */
    public function __construct($message = "") {
        parent::__construct($message);
    }

}