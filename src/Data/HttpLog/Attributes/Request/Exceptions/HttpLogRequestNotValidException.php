<?php

namespace Railken\Laravel\Core\Data\HttpLog\Attributes\Request\Exceptions;

use Railken\Laravel\Core\Data\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogRequestNotValidException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'request';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_REQUEST_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
