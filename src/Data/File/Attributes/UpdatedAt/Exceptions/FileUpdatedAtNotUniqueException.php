<?php

namespace Railken\Laravel\Core\Data\File\Attributes\UpdatedAt\Exceptions;

use Railken\Laravel\Core\Data\File\Exceptions\FileAttributeException;

class FileUpdatedAtNotUniqueException extends FileAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'FILE_UPDATED_AT_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}
