<?php

use Ozerich\FileStorage\Utils\ConfigHelper;
use App\Enums\FileScenario;
use App\Enums\Thumbnail;

return [
    'defaultStorage' => ConfigHelper::temporaryStorage(),
    'defaultValidator' => ConfigHelper::defaultValidator(),

    'scenarios' => [
        FileScenario::OpenGraph => [
            'storage' => ConfigHelper::fileStorage('content'),
            'validator' => ConfigHelper::imageValidator(),
            'thumbnail' => ConfigHelper::thumbOpenGraph()
        ],
        FileScenario::Content => [
            'storage' => ConfigHelper::fileStorage('content'),
            'validator' => ConfigHelper::imageValidator(),
        ],
    ]
];
