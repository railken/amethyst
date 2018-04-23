<?php

namespace Railken\Laravel\Core\Data\Config\Attributes\Id\Exceptions;

use Railken\Laravel\Core\Data\Config\Exceptions\ConfigAttributeException;

class ConfigIdNotDefinedException extends ConfigAttributeException
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
    protected $code = 'CONFIG_ID_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
