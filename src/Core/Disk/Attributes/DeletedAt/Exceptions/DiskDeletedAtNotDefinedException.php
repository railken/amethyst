<?php

namespace Railken\LaraOre\Core\Disk\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Core\Disk\Exceptions\DiskAttributeException;

class DiskDeletedAtNotDefinedException extends DiskAttributeException
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
    protected $code = 'DISK_DELETED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}