<?php

namespace App\Constants;

final class AdminStatus extends Constant
{
    const ACTIVE = 1;
    const BANNED = 2;

    public static function getList(): array
    {
        return [
            self::ACTIVE => trans('admin.active'),
            self::BANNED => trans('admin.banned'),
        ];
    }
}
