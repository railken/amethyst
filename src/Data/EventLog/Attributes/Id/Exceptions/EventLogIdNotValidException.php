<?php

namespace Railken\Laravel\Core\Data\EventLog\Attributes\Id\Exceptions;

use Railken\Laravel\Core\Data\EventLog\Exceptions\EventLogAttributeException;

class EventLogIdNotValidException extends EventLogAttributeException
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
    protected $code = 'EVENTLOG_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
