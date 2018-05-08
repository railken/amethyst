<?php

namespace Railken\LaraOre\Report\Pdf\Attributes\Name\Exceptions;

use Railken\LaraOre\Report\Pdf\Exceptions\PdfAttributeException;

class PdfNameNotValidException extends PdfAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'PDF_NAME_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
