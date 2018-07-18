<?php
namespace App\Exceptions;

use Exception;

/**
 * The AuthorizationException class is used by policies where authorization has
 * failed, and a message is required to indicate the type of failure.
 * ---
 * NOTE: For consistency and clarity with the framework the exception was named
 * for the similarly named exception provided by Laravel that does not stop
 * execution when thrown in a policy due to internal handling of the
 * exception.
 */
class AuthorizationException extends Exception
{
    private $statusCode = 403;

    public function __construct($message = null, \Exception $previous = null, $code = 0)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}