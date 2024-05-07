<?php

namespace App\Models\Enums;

enum HelpdeskTicketStatusEnum: string implements Enum
{

    use EnumEnhancer;

    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case ANSWERED   = 'answered';
    case CLOSED      = 'closed';
    case LOCKED      = 'locked';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => __('pending'),
            self::IN_PROGRESS => __('in progress'),
            self::ANSWERED   => __('answered'),
            self::CLOSED      => __('closed'),
            self::LOCKED      => __('locked'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::PENDING, self::IN_PROGRESS => 'warning',
            self::ANSWERED   => 'success',
            self::CLOSED, self::LOCKED      => 'danger',
        };
    }
}
