<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

//CMS
use App\Models\Rentier;

class RentierService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/renters/' . $model->file))) {
                File::delete(public_path('uploads/renters/' . $model->file));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $file->storeAs('renters', $name, 'public_uploads');
        $filepath = public_path('uploads/renters/' . $name);

        Image::make($filepath)
            ->widen(
                960
            )->save($filepath);

        $model->update(['file' => $name]);
    }
}
