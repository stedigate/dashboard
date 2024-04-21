<?php

namespace App\Models\Enums;

enum WalletStatusEnum: string implements Enum
{

    use EnumEnhancer;

    case ACTIVE  = 'active';
    case FREEZE  = 'freeze';
    case DELETED = 'deleted';

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE  => __('active'),
            self::FREEZE  => __('freeze'),
            self::DELETED => __('deleted'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::ACTIVE  => 'success',
            self::FREEZE  => 'warning',
            self::DELETED => 'danger',
        };
    }
}
