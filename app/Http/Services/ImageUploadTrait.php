<?php


namespace App\Http\Services;


use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait ImageUploadTrait
{
    protected $path = "/uploads/products/";

    public function handleUploadImage($image, $w = 200, $h = 200)
    {
        if (!is_dir(public_path($this->path))) {
            mkdir(public_path($this->path), 0755, true);
        }

        $filename = substr(uniqid(), 0, 10) . "_" . Str::snake($image->getClientOriginalName());
        $img = Image::make($image);
        $img->resize($w, $h, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save(public_path($this->path . $filename));

        return $filename;
    }
}
