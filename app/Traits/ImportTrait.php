<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

trait ImportTrait
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx'
        ]);

        try {
            Excel::import(new $this->importClass(), $request->file('file'));
        } catch (ValidationException $e) {
            $errors = [];
            foreach ($e->failures() as $failure) {
                $errors[] = "Row {$failure->row()}: " . implode(', ', $failure->errors());
            }

            toast(trans('admin.failed_import'), 'error');

            return back()->withErrors(compact('errors'));
        }
        toast(trans('admin.data').' '.trans('admin.imported').' '.trans('admin.successfully'),'success');

        return back();
    }
}
