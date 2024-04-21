<?php

namespace App\Models\Enums;

enum PayoutTypeEnum: string implements Enum
{

    use EnumEnhancer;

    case AUTOMATIC = 'automatic';
    case MANUAL    = 'manual';

    public function label(): string
    {
        return match ($this) {
            self::AUTOMATIC => __('automatic'),
            self::MANUAL    => __('manual'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::AUTOMATIC => 'info',
            self::MANUAL    => 'warning',
        };
    }
}
