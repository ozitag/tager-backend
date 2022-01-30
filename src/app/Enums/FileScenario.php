<?php

namespace App\Enums;

enum FileScenario:string
{
    case OpenGraph = 'opengraph';
    case Content = 'content';
    case UserFile = 'userfile';
}
