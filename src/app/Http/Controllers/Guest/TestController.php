<?php

namespace App\Http\Controllers\Guest;

use OZiTAG\Tager\Backend\Core\Controller;
use OZiTAG\Tager\Backend\Core\SuccessResource;

class TestController extends Controller
{
    public function index()
    {
        return new SuccessResource();
    }
}
