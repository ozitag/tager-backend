<?php

use Ozerich\FileStorage\Utils\ConfigHelper;
use OZiTAG\Tager\Backend\Files\Utils\TagerImageScenario;
use App\Enums\FileScenario;

return [
    'defaultStorage' => ConfigHelper::temporaryStorage(),
    'defaultValidator' => ConfigHelper::defaultValidator(),

    'scenarios' => [
        FileScenario::OpenGraph => TagerImageScenario::wrap([
            'storage' => ConfigHelper::fileStorage('open-graph'),
            'validator' => ConfigHelper::openGraphValidator(),
            'thumbnail' => ConfigHelper::openGraphThumb()
        ]),
        FileScenario::Content => TagerImageScenario::wrap([
            'storage' => ConfigHelper::fileStorage('content'),
            'validator' => ConfigHelper::imageValidator(),
        ]),
        FileScenario::UserFile => [
            'storage' => ConfigHelper::fileStorage('userfiles', 0),
            'validator' => ConfigHelper::defaultValidator(100),
            'saveOriginalFilename' => true
        ],
    ]
];
