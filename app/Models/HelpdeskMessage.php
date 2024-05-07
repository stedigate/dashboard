<?php

namespace App\Models;

use App\Models\Queries\HelpdeskMessageQueryBuilder;
use Database\Factories\HelpdeskMessageFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Wallo\FilamentCompanies\HasCompanies;

class HelpdeskMessage extends Model
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
            'attachments' => 'array',
        ];
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return HelpdeskMessageFactory::new();
    }

    public static function query(): HelpdeskMessageQueryBuilder|Builder
    {
        return parent::query();
    }

    public function newEloquentBuilder($query): HelpdeskMessageQueryBuilder
    {
        return new HelpdeskMessageQueryBuilder($query);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(HelpdeskTicket::class);
    }
}
