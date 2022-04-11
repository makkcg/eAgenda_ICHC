<?php

namespace App\Constants;

final class AssetType extends Constant
{
    const IMAGE = 1;

    public static function getList(): array
    {
        return [
            self::IMAGE => trans('constants.image'),
        ];
    }
}
