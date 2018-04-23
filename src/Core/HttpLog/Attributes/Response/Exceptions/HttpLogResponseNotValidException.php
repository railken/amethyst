<?php

namespace Railken\LaraOre\Core\HttpLog\Attributes\Response\Exceptions;

use Railken\LaraOre\Core\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogResponseNotValidException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'response';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_RESPONSE_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}