<?php

namespace App\Repositories\Admin;

use App\Models\VisualInformation;
use App\Traits\FileTrait;

class VisualInformationRepository
{
    use FileTrait;

    public function create($data)
    {
        if (!empty($data['icon'])) {
            $data['icon'] = self::uploadFile($data['icon'], 'visual-information/');
        }
        if (!empty($data['asset'])) {
            $data['asset'] = self::uploadFile($data['asset'], 'visual-information/');
        }

        return VisualInformation::create($data);
    }

    public function update($information, $data)
    {
        if (!empty($data['icon'])) {
            self::deleteFile($information->image);
            $data['icon'] = self::uploadFile($data['icon'], 'visual-information/');
        }
        if (!empty($data['asset'])) {
            self::deleteFile($information->asset);
            $data['asset'] = self::uploadFile($data['asset'], 'visual-information/');
        }

        $information->update($data);

        return $information;
    }

    public function delete($information)
    {
        self::deleteFile($information->icon);
        self::deleteFile($information->asset);
        $information->delete();
    }
}
