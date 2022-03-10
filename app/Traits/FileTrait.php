<?php

namespace App\Traits;


use Illuminate\Support\Facades\DB;

trait FileTrait
{
    private static function uploadFile($file, $path = '')
    {
        if (empty($file)) {
            return '';
        }

        $fileName = uniqid(rand()) . '.' . $file->getClientOriginalExtension();
        $fullPath = 'uploads/' . $path;
        $file->move($fullPath, $fileName);

        return $fullPath . $fileName;
    }

    private static function uploadFiles($files, $model, $path = '', $table = 'files', $callable = 'fileable', $column = 'url')
    {
        if (empty($files)) {
            return;
        }

        $data = [];

        if (is_array($files)) {
            foreach ($files as $file) {
                $data[] = self::getFileStructure(self::uploadFile($file, $path), $model, $callable);
            }
            self::storeFile($data, $table);
            return;
        }

        self::storeFile(self::getFileStructure(self::uploadFile($files, $path), $model, $callable), $table);
    }

    private static function getFileStructure($file, $model, $callable)
    {
        return [
            'url' => $file,
            $callable.'_id' => $model->id,
            $callable.'_type' => get_class($model),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    private static function storeFile($data, $table)
    {
        DB::table($table)->insert($data);
    }

    private static function deleteFile($files)
    {
        try {
            if (is_array($files)) {
                foreach ($files as $file) {
                    unlink(array_values($file)[0]);
                }
                return true;
            }
            unlink($files);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    private static function deleteFiles($files, $column = 'url')
    {
        self::deleteFile($files->select($column)->get()->toArray());
        $files->delete();
    }
}
