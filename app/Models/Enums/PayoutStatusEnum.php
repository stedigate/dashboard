<?php

namespace App\Models\Enums;

enum PayoutStatusEnum: string implements Enum
{

    use EnumEnhancer;

    case PENDING     = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED   = 'completed';
    case FAILED      = 'failed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING     => __('pending'),
            self::IN_PROGRESS => __('in progress'),
            self::COMPLETED   => __('completed'),
            self::FAILED      => __('failed'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::PENDING     => 'info',
            self::IN_PROGRESS => 'warning',
            self::COMPLETED   => 'success',
            self::FAILED      => 'danger',
        };
    }
}
