<?php

namespace Railken\LaraOre\Core\User;

use Railken\Laravel\Manager\Contracts\ModelSerializerContract;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\ModelSerializer;
use Railken\Laravel\Manager\Tokens;
use Illuminate\Support\Collection;
use Railken\Bag;
use Laravolt\Avatar\Avatar;
use Illuminate\Support\Facades\Storage;

class UserSerializer extends ModelSerializer
{

    /**
     * Serialize entity
     *
     * @param EntityContract $entity
     * @param Collection $select
     *
     * @return array
     */
    public function serialize(EntityContract $entity, Collection $select = null)
    {
        $bag = new Bag($entity->toArray());

        if ($select) {
            $bag = $bag->only($select->toArray());
        }

        $bag = $bag->only($this->manager->authorizer->getAuthorizedAttributes(Tokens::PERMISSION_SHOW, $entity)->keys()->toArray());

        $bag->set('avatar', (new Avatar())->create($entity->name)->toBase64()->getEncoded());
        $bag->set('notifications', $entity->unreadNotifications);
        return $bag;
    }
}