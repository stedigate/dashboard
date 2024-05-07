<?php

namespace App\Models\Enums;

enum HelpdeskTicketPriorityEnum: string implements Enum
{

    use EnumEnhancer;

    case LOW = 'low';
    case MEDIUM      = 'medium';
    case HIGH      = 'high';

    public function label(): string
    {
        return match ($this) {
            self::LOW => __('low'),
            self::MEDIUM => __('medium'),
            self::HIGH   => __('high'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::LOW => 'success',
            self::MEDIUM   => 'warning',
            self::HIGH      => 'danger',
        };
    }
}
