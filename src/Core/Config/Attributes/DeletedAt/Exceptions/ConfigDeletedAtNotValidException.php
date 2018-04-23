<?php

namespace Railken\LaraOre\Core\Config\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Core\Config\Exceptions\ConfigAttributeException;

class ConfigDeletedAtNotValidException extends ConfigAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONFIG_DELETED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}