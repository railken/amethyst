<?php

namespace Railken\Laravel\Core\Data\File\Attributes\UserId\Exceptions;

use Railken\Laravel\Core\Data\File\Exceptions\FileAttributeException;

class FileUserIdNotDefinedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'user_id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_USER_ID_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
