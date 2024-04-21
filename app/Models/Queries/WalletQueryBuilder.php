<?php

namespace App\Models\Queries;

use App\Models\Enums\BlockchainEnum;

class WalletQueryBuilder extends BaseBuilder
{
    /**
     * @return $this
     */
    public function company(int $id): self
    {
        return $this->where('company_id', $id);
    }
    /**
     * @return $this
     */
    public function blockchain(BlockchainEnum $blockchain): self
    {
        return $this->where('blockchain', $blockchain);
    }
}
