<?php

namespace Railken\LaraOre\Core\Log\Attributes\Vars\Exceptions;

use Railken\LaraOre\Core\Log\Exceptions\LogAttributeException;

class LogVarsNotUniqueException extends LogAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'vars';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'LOG_VARS_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}