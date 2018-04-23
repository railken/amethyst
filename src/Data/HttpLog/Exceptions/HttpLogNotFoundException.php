<?php

namespace Railken\Laravel\Core\Data\HttpLog\Exceptions;

class HttpLogNotFoundException extends HttpLogException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
