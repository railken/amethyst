<?php

namespace Railken\LaraOre\Report\Pdf\Attributes\Template\Exceptions;

use Railken\LaraOre\Report\Pdf\Exceptions\PdfAttributeException;

class PdfTemplateNotValidException extends PdfAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'template';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'PDF_TEMPLATE_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
