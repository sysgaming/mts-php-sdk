<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Exception;

class MtsGenericException extends Exception
{

    /**
     * MtsGenericException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct($message = "", $code = 0)  {
        parent::__construct($message, $code);
    }
}