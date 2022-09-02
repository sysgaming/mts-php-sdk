<?php

namespace Sysgaming\MtsPhpSdk\Exceptions;

use Exception;

class MtsException extends Exception
{
    public function __construct($message = "")  {
        parent::__construct($message);
    }
}