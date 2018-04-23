<?php

namespace Railken\Laravel\Core\Data\File\Attributes\Type\Exceptions;

use Railken\Laravel\Core\Data\File\Exceptions\FileAttributeException;

class FileTypeNotUniqueException extends FileAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'type';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'FILE_TYPE_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}
