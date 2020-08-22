<?php

namespace App\Templates;

use OZiTAG\Tager\Backend\Pages\Structures\Template;

class HomeTemplate extends Template
{
    public function __construct()
    {
        parent::__construct('Главная страница', []);
    }
}
