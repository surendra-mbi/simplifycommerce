<?php

namespace Lib\Simplify\Exception;

use Lib\Simplify\Exception\Simplify_ApiException;

/**
 * Exception when a requested object cannot be found.
 */
class Simplify_ObjectNotFoundException extends Simplify_ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}