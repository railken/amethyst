<?php

namespace Railken\Laravel\Core\Data\Notification\Attributes\Id\Exceptions;

use Railken\Laravel\Core\Data\Notification\Exceptions\NotificationAttributeException;

class NotificationIdNotValidException extends NotificationAttributeException
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
    protected $code = 'NOTIFICATION_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
