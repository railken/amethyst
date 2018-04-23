<?php

namespace Railken\LaraOre\Core\MailLog\Attributes\Subject\Exceptions;

use Railken\LaraOre\Core\MailLog\Exceptions\MailLogAttributeException;

class MailLogSubjectNotDefinedException extends MailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'subject';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'MAILLOG_SUBJECT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}