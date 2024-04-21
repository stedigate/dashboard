<?php

namespace App\Models\Enums;

enum UserStatusEnum: string implements Enum
{

    use EnumEnhancer;

    case ACTIVE = 'active';
    case VERIFIED = 'verified';
    case SUSPENDED = 'suspended';

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => __('Active'),
            self::VERIFIED => __('Verified'),
            self::SUSPENDED => __('Suspended'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::ACTIVE => 'info',
            self::VERIFIED => 'success',
            self::SUSPENDED => 'danger',
        };
    }
}
