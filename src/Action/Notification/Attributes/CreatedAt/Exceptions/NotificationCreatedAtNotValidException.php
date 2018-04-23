<?php

namespace Railken\LaraOre\Action\Notification\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Action\Notification\Exceptions\NotificationAttributeException;

class NotificationCreatedAtNotValidException extends NotificationAttributeException
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
    protected $code = 'NOTIFICATION_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}