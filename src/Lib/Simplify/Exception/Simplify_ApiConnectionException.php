<?

namespace Lib\Simplify\Exception;

use Lib\Simplify\Exception\Simplify_ApiException;

/**
 * Exception raised when there are communication problems contacting the API.
 */
class Simplify_ApiConnectionException extends Simplify_ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}