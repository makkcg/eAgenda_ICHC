<?php

namespace App\Constants;

final class AdminStatus extends Constant
{
    const BANNED = 0;
    const ACTIVE = 1;

    public static function getList(): array
    {
        return [
            self::BANNED => trans('admin.banned'),
            self::ACTIVE => trans('admin.active'),
        ];
    }
}
