<?php

namespace Railken\Laravel\Core\Data\EventLog\Attributes\Name\Exceptions;

use Railken\Laravel\Core\Data\EventLog\Exceptions\EventLogAttributeException;

class EventLogNameNotAuthorizedException extends EventLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EVENTLOG_NAME_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
