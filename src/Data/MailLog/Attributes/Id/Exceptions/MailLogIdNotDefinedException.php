<?php

namespace Railken\Laravel\Core\Data\MailLog\Attributes\Id\Exceptions;

use Railken\Laravel\Core\Data\MailLog\Exceptions\MailLogAttributeException;

class MailLogIdNotDefinedException extends MailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'MAILLOG_ID_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
