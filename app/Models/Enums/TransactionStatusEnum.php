<?php

namespace App\Models\Enums;

enum TransactionStatusEnum: string implements Enum
{

    use EnumEnhancer;

    case IN_PROGRESS = 'in_progress';
    case CONFIRMED   = 'confirmed';
    case FAILED      = 'failed';

    public function label(): string
    {
        return match ($this) {
            self::IN_PROGRESS => __('in progress'),
            self::CONFIRMED   => __('confirmed'),
            self::FAILED      => __('failed'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::IN_PROGRESS => 'warning',
            self::CONFIRMED   => 'success',
            self::FAILED      => 'danger',
        };
    }
}
