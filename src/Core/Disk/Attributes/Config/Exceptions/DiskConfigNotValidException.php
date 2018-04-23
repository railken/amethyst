<?php

namespace Railken\LaraOre\Core\Disk\Attributes\Config\Exceptions;

use Railken\LaraOre\Core\Disk\Exceptions\DiskAttributeException;

class DiskConfigNotValidException extends DiskAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'config';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_CONFIG_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}