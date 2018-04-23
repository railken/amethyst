<?php

namespace Railken\LaraOre\Core\Listener\Attributes\Name\Exceptions;

use Railken\LaraOre\Core\Listener\Exceptions\ListenerAttributeException;

class ListenerNameNotValidException extends ListenerAttributeException
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
    protected $code = 'LISTENER_NAME_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}