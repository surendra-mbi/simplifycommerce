<?php

namespace Lib\Simplify\Exception;

use Lib\Simplify\Exception\Simplify_ApiException;



/**
 * Exception when there was a system error processing a request.
 */
class Simplify_SystemException extends Simplify_ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}
