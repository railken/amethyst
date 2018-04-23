<?php

namespace Railken\Laravel\Core\Data\Listener\Attributes\ActionId\Exceptions;

use Railken\Laravel\Core\Data\Listener\Exceptions\ListenerAttributeException;

class ListenerActionIdNotUniqueException extends ListenerAttributeException
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
    protected $code = 'LISTENER_ACTION_ID_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
