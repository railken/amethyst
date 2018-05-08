<?php

namespace Railken\LaraOre\Report\Pdf\Attributes\Filename\Exceptions;

use Railken\LaraOre\Report\Pdf\Exceptions\PdfAttributeException;

class PdfFilenameNotValidException extends PdfAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'filename';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'PDF_FILENAME_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
