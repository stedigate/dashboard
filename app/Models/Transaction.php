<?php

namespace App\Models;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\TransactionStatusEnum;
use App\Models\Queries\TransactionQueryBuilder;
use Database\Factories\TransactionFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Wallo\FilamentCompanies\HasCompanies;

class Transaction extends Model
{
    use HasFactory;
    use HasCompanies;


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'currency' => CurrencyEnum::class,
            'blockchain' => BlockchainEnum::class,
            'status' => TransactionStatusEnum::class,
        ];
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return TransactionFactory::new();
    }

    public static function query(): TransactionQueryBuilder|Builder
    {
        return parent::query();
    }

    public function newEloquentBuilder($query): TransactionQueryBuilder
    {
        return new TransactionQueryBuilder($query);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function payout(): BelongsTo
    {
        return $this->belongsTo(Payout::class);
    }
}
