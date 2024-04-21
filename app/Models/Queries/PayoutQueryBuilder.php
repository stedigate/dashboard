<?php

namespace App\Models\Queries;

class PayoutQueryBuilder extends BaseBuilder
{
    /**
     * @return $this
     */
    public function company(int $id): self
    {
        return $this->where('company_id', $id);
    }
}
