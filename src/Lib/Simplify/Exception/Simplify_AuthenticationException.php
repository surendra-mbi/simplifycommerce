<?

namespace Lib\Simplify\Exception;

use Lib\Simplify\Exception\Simplify_ApiException;

class Simplify_AuthenticationException extends Simplify_ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}