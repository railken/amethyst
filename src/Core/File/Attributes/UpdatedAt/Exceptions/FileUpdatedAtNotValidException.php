<?php

namespace Railken\LaraOre\Core\File\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Core\File\Exceptions\FileAttributeException;

class FileUpdatedAtNotValidException extends FileAttributeException
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
    protected $code = 'FILE_UPDATED_AT_NOT_VALID';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not valid";
}