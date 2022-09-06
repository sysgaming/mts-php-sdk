<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Exception;

class MtsException extends Exception
{
    /**
     * MtsException constructor.
     * @param $message
     */
    public function __construct($message = "")  {
        parent::__construct($message);
    }
}