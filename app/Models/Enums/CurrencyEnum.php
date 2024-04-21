<?php

namespace App\Models\Enums;

enum CurrencyEnum: string implements Enum
{

    use EnumEnhancer;

    case USDT = 'usdt';
    case USDC = 'usdc';
    case EURC = 'eurc';
    case BUSD = 'busd';

    public function label(): string
    {
        return match ($this) {
            self::USDT => __('USDT'),
            self::USDC => __('USDC'),
            self::EURC => __('EURC'),
            self::BUSD => __('BUSD'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::USDT => 'success',
            self::USDC => 'info',
            self::EURC => 'default',
            self::BUSD => 'warning',
        };
    }

    public function logo()
    {
        return match ($this) {
            self::USDC     => 'images/logo/usdc.svg',
            self::USDT   => 'images/logo/usdt.svg',
            self::EURC   => 'images/logo/eurc.svg',
            self::BUSD   => 'images/logo/busd.svg',
        };
    }

    public function fiatCurrency()
    {
        return match ($this) {
            self::USDC, self::USDT, self::BUSD => 'USD',
            self::EURC                         => 'EUR',
        };
    }
}
