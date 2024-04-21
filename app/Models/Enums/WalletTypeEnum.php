<?php

namespace App\Models\Enums;

enum WalletTypeEnum: string implements Enum
{

    use EnumEnhancer;

    case DEPOSIT  = 'deposit';
    case WITHDRAW  = 'withdraw';

    public function label(): string
    {
        return match ($this) {
            self::DEPOSIT  => __('deposit'),
            self::WITHDRAW  => __('withdraw'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::DEPOSIT  => 'success',
            self::WITHDRAW  => 'warning',
        };
    }
}
