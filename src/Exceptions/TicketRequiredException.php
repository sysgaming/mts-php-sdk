<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

class TicketRequiredException extends MtsException {

    /**
     * TicketRequiredException constructor.
     * @param string $message
     */
    public function __construct($message = "")
    {
        parent::__construct($message);
    }

}