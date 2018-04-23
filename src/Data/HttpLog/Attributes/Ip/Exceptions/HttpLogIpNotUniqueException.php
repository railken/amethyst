<?php

namespace Railken\Laravel\Core\Data\HttpLog\Attributes\Ip\Exceptions;

use Railken\Laravel\Core\Data\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogIpNotUniqueException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'ip';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_IP_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
