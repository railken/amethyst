<?php

namespace Railken\LaraOre\Action\Notification\Attributes\Targets\Exceptions;

use Railken\LaraOre\Action\Notification\Exceptions\NotificationAttributeException;

class NotificationTargetsNotValidException extends NotificationAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'targets';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NOTIFICATION_TARGETS_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}