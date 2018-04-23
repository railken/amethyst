<?php

namespace Railken\Laravel\Core\Data\Address\Attributes\Street\Exceptions;

use Railken\Laravel\Core\Data\Address\Exceptions\AddressAttributeException;

class AddressStreetNotDefinedException extends AddressAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'street';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'ADDRESS_STREET_NOT_DEFINED';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is required";
}
