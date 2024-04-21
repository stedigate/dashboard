<?php

namespace App\Models\Queries;

class TransactionQueryBuilder extends BaseBuilder
{
    /**
     * @return $this
     */
    public function company(int $id): self
    {
        return $this->where('company_id', $id);
    }
}
