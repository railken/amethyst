<?php

namespace Railken\LaraOre\Core\MailLog\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Core\MailLog\Exceptions\MailLogAttributeException;

class MailLogCreatedAtNotValidException extends MailLogAttributeException
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
    protected $code = 'MAILLOG_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}