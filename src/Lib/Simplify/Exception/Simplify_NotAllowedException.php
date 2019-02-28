<?php

namespace Lib\Simplify\Exception;

use Lib\Simplify\Exception\Simplify_ApiException;

/**
 * Exception when a request was not allowed.
 */
class Simplify_NotAllowedException extends Simplify_ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}