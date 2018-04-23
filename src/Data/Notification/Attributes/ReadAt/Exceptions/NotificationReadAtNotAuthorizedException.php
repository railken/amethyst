<?php

namespace Railken\Laravel\Core\Data\Notification\Attributes\ReadAt\Exceptions;

use Railken\Laravel\Core\Data\Notification\Exceptions\NotificationAttributeException;

class NotificationReadAtNotAuthorizedException extends NotificationAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'read_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NOTIFICATION_READ_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
