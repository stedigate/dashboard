<?php

namespace App\Models\Enums;

interface Enum
{
    public function label(): string;

    public function badgeColor(): string;
}
