<?php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
    public function __construct($message, $code = 400, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    

    public function render()
    {
        return response()->json([
            'success' => false,
            'message' => $this->message,
            'data' => null,
        ], $this->code);
    }
}
