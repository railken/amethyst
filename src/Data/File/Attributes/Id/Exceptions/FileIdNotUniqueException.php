<?php

namespace Railken\Laravel\Core\Data\File\Attributes\Id\Exceptions;

use Railken\Laravel\Core\Data\File\Exceptions\FileAttributeException;

class FileIdNotUniqueException extends FileAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'FILE_ID_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}
