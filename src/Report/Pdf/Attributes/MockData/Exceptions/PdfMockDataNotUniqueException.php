<?php

namespace Railken\LaraOre\Report\Pdf\Attributes\MockData\Exceptions;

use Railken\LaraOre\Report\Pdf\Exceptions\PdfAttributeException;

class PdfMockDataNotUniqueException extends PdfAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'mock_data';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'PDF_MOCK_DATA_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
