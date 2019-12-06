<?php


namespace App\Http\Services;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ProductCsvUpload
{
    protected $pathCsv = "/csv/";

    public function handleUpload(UploadedFile $file): string
    {
        $filename = substr(uniqid(), 0, 10) . "_" . Str::snake($file->getClientOriginalName());
        Storage::disk('local')->putFileAs($this->pathCsv , $file, $filename);
        return $filename;
    }

}
