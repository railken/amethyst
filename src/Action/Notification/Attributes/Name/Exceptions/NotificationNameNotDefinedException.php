<?php

namespace Railken\Laravel\Core\Action\Notification\Attributes\Name\Exceptions;

use Railken\Laravel\Core\Action\Notification\Exceptions\NotificationAttributeException;

class NotificationNameNotDefinedException extends NotificationAttributeException
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
    protected $code = 'NOTIFICATION_NAME_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
