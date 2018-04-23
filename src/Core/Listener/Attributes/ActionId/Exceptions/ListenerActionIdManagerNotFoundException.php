<?php

namespace Railken\LaraOre\Core\Listener\Attributes\ActionId\Exceptions;

use Railken\LaraOre\Core\Listener\Exceptions\ListenerAttributeException;

class ListenerActionIdManagerNotFoundException extends ListenerAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'action_id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'LISTENER_ACTION_ID_MANAGER_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'No manager found';
}