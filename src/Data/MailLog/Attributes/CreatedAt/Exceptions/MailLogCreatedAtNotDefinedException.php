<?php

namespace Railken\Laravel\Core\Data\MailLog\Attributes\CreatedAt\Exceptions;

use Railken\Laravel\Core\Data\MailLog\Exceptions\MailLogAttributeException;

class MailLogCreatedAtNotDefinedException extends MailLogAttributeException
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
    protected $code = 'MAILLOG_CREATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
