<?php

namespace App\Transformers\User;

use App\Transformers\BaseTransformer;

class DefaultTransformer extends BaseTransformer
{

    public function transform($user)
    {
        return [
                'id' => $user->id,
                'name' => $user->name
        ];
    }
}