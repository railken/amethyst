<?php

namespace Railken\LaraOre\Core\MailLog\Attributes\Body\Exceptions;

use Railken\LaraOre\Core\MailLog\Exceptions\MailLogAttributeException;

class MailLogBodyNotAuthorizedException extends MailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'body';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'MAILLOG_BODY_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}