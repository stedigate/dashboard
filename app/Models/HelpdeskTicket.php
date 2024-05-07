<?php

namespace App\Models;

use App\Models\Enums\HelpdeskTicketPriorityEnum;
use App\Models\Enums\HelpdeskTicketStatusEnum;
use App\Models\Queries\HelpdeskTicketQueryBuilder;
use Database\Factories\HelpdeskTicketFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Wallo\FilamentCompanies\HasCompanies;

class HelpdeskTicket extends Model
{
    use HasFactory;
    use HasCompanies;
    use HasUuids;

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }

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
            'status' => HelpdeskTicketStatusEnum::class,
            'priority' => HelpdeskTicketPriorityEnum::class,
        ];
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return HelpdeskTicketFactory::new();
    }

    public static function query(): HelpdeskTicketQueryBuilder|Builder
    {
        return parent::query();
    }

    public function newEloquentBuilder($query): HelpdeskTicketQueryBuilder
    {
        return new HelpdeskTicketQueryBuilder($query);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(HelpdeskMessage::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(HelpdeskCategory::class);
    }

    public function labels(): HasMany
    {
        return $this->hasMany(HelpdeskLabel::class);
    }
}
