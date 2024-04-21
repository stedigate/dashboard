<?php

namespace App\Models;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use App\Models\Queries\WalletQueryBuilder;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Database\Factories\WalletFactory;
use Filament\Panel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Spatie\Permission\Traits\HasRoles;
use Wallo\FilamentCompanies\HasCompanies;
use Wallo\FilamentCompanies\HasConnectedAccounts;
use Wallo\FilamentCompanies\HasProfilePhoto;
use Wallo\FilamentCompanies\SetsProfilePhotoFromUrl;

class Wallet extends Model
{
    use HasFactory;
    use HasCompanies;
    use Notifiable;
    use HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id'
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
            'private_key',
            'public_key',
        ];

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
            'private_key' => 'encrypted',
            'status' => WalletStatusEnum::class,
            'type' => WalletTypeEnum::class,
            'currency' => CurrencyEnum::class,
            'blockchain' => BlockchainEnum::class,
        ];
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return WalletFactory::new();
    }

    public static function query(): WalletQueryBuilder|Builder
    {
        return parent::query();
    }

    public function newEloquentBuilder($query): WalletQueryBuilder
    {
        return new WalletQueryBuilder($query);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function Transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function payouts(): HasMany
    {
        return $this->hasMany(Payout::class);
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return $this->belongsToCompany($tenant);
    }

    public function getTenants(Panel $panel): array | Collection
    {
        return $this->allCompanies();
    }

    public function getDefaultTenant(Panel $panel): ?Model
    {
        return $this->currentCompany;
    }
}
