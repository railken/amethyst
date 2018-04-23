<?php

namespace Railken\LaraOre\Core\File\Attributes\Path;

use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Traits\AttributeValidateTrait;
use Railken\LaraOre\Core\File\Attributes\Path\Exceptions as Exceptions;
use Respect\Validation\Validator as v;
use Railken\Laravel\Manager\Tokens;

class PathAttribute extends BaseAttribute
{

    /**
     * Name attribute
     *
     * @var string
     */
    protected $name = 'path';

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
        Tokens::NOT_DEFINED => Exceptions\FilePathNotDefinedException::class,
        Tokens::NOT_VALID => Exceptions\FilePathNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\FilePathNotAuthorizedException::class
    ];

    /**
     * List of all permissions
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'file.attributes.path.fill',
        Tokens::PERMISSION_SHOW => 'file.attributes.path.show'
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
        return true;
    }

    public function getDefault(EntityContract $entity)
    {
        do {
            $filename = str_random(32)."-".str_random(32);
        } while ($this->getManager()->getRepository()->newQueryOneDiskPath($filename)->count() > 0);

        return $filename;
    }
}