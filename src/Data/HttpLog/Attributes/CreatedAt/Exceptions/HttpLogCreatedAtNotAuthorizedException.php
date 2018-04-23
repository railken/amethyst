<?php

namespace Railken\Laravel\Core\Data\HttpLog\Attributes\CreatedAt\Exceptions;

use Railken\Laravel\Core\Data\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogCreatedAtNotAuthorizedException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_CREATED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
