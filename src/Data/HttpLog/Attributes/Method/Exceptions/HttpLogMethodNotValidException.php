<?php

namespace Railken\Laravel\Core\Data\HttpLog\Attributes\Method\Exceptions;

use Railken\Laravel\Core\Data\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogMethodNotValidException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'method';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_METHOD_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
