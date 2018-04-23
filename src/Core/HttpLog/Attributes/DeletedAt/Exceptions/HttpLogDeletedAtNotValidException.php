<?php

namespace Railken\LaraOre\Core\HttpLog\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Core\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogDeletedAtNotValidException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_DELETED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}