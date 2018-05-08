<?php

namespace Railken\LaraOre\Report\Pdf\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Report\Pdf\Exceptions\PdfAttributeException;

class PdfCreatedAtNotDefinedException extends PdfAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'PDF_CREATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
