<?php

namespace App\Models\Queries;

class UserQueryBuilder extends BaseBuilder
{
    /**
     * @return $this
     */
    public function user(int $id): self
    {
        return $this->where('user_id', $id);
    }
}
