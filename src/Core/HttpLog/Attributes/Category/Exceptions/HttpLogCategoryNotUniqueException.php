<?php

namespace Railken\LaraOre\Core\HttpLog\Attributes\Category\Exceptions;

use Railken\LaraOre\Core\HttpLog\Exceptions\HttpLogAttributeException;

class HttpLogCategoryNotUniqueException extends HttpLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'category';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'HTTPLOG_CATEGORY_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}