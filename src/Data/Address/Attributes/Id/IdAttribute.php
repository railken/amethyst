<?php

namespace Railken\Laravel\Core\Data\Address\Attributes\Id;

use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Traits\AttributeValidateTrait;
use Railken\Laravel\Core\Data\Address\Attributes\Id\Exceptions as Exceptions;
use Respect\Validation\Validator as v;
use Railken\Laravel\Manager\Tokens;

class IdAttribute extends BaseAttribute
{

    /**
     * Name attribute
     *
     * @var string
     */
    protected $name = 'id';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model
     *
     * @var boolean
     */
    protected $required = false;

    /**
     * Is the attribute unique
     *
     * @var boolean
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED => Exceptions\AddressIdNotDefinedException::class,
        Tokens::NOT_VALID => Exceptions\AddressIdNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\AddressIdNotAuthorizedException::class
    ];

    /**
     * List of all permissions
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'address.attributes.id.fill',
        Tokens::PERMISSION_SHOW => 'address.attributes.id.show'
    ];

    /**
     * Is a value valid ?
     *
     * @param EntityContract $entity
     * @param mixed $value
     *
     * @return boolean
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::length(1, 255)->validate($value);
    }
}
