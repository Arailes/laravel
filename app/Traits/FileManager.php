<?php 

namespace App;

use App\Models\File;
use Carbon\Carbon;

trait FileManager{

    protected function createFile($file, String $hash, String $path){
        if ($file->isValid()){
            $originalName = $this->getOriginalName($file);
            $title =  $this->createFileName($originalName);
            $extension =  $file->extension();
            $size = $file->getSize();
            $fileNameWithExtension = $this->createFileNameWithExtension($title,$extension);
            $path = $file->storeAs( $path, $fileNameWithExtension , 'public' );

            $fileInfo = [
                'title' => $title,
                'extension' => $extension,
                'size' => $size,
                'path' => $path
            ];

           return File::create($fileInfo);
        }    
    }

    protected function updateFile($file, String $hash){
        //
    }

    protected function deleteFile(Int $id){
        //
    }

    protected function createFileName(String $originalName) : String{
        $slug = Str::slug($originalName);
        $fileName = Carbon::now()->forma('h-i-s-d-m-Y-' . Str::random(5));
        return $fileName;
    }

    protected function createFileNameWithExtension(String $fileName, $extension) : String{
        return $fileName . '.' . $extension;
    }

    protected function getOriginalName($file) : String{
        return  pathinfo( $file->getClientOriginalName () , PATHINFO_FILENAME );
    }
}