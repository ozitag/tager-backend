<?php


namespace App\Http\Controllers\Admin\Api;


use App\Features\files\StoreFileFeature;
use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\file\FileResource;

class UploadController extends Controller
{
    public function store(){
        return new FileResource(
            $this->serve(StoreFileFeature::class)
        );
    }
}
