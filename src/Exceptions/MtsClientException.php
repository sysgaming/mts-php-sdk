<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

class MtsClientException extends MtsGenericException
{

    /**
     * MtsException constructor.
     * @param string $message
     */
    public function __construct($message = "")  {
        parent::__construct($message);
    }
}