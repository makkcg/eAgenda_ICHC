<?php

namespace App\Constants;

final class AlarmRepetition extends Constant
{
    const ONE_TIME = 1;
    const DAILY = 2;
    const WEEKLY = 3;

    public static function getList(): array
    {
        return [
            self::ONE_TIME => trans('constants.one_time'),
            self::DAILY => trans('constants.daily'),
            self::WEEKLY => trans('constants.weekly'),
        ];
    }
}
