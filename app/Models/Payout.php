<?php

namespace App\Models;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\PayoutStatusEnum;
use App\Models\Queries\PayoutQueryBuilder;
use Database\Factories\PayoutFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Wallo\FilamentCompanies\HasCompanies;

class Payout extends Model
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
            'status' => PayoutStatusEnum::class,
            'currency' => CurrencyEnum::class,
            'blockchain' => BlockchainEnum::class,
        ];
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return PayoutFactory::new();
    }

    public static function query(): PayoutQueryBuilder|Builder
    {
        return parent::query();
    }

    public function newEloquentBuilder($query): PayoutQueryBuilder
    {
        return new PayoutQueryBuilder($query);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function Transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
