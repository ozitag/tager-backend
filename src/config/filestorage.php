<?php

use Ozerich\FileStorage\Utils\ConfigHelper;
use OZiTAG\Tager\Backend\Files\Utils\TagerImageScenario;
use App\Enums\FileScenario;

return [
    'defaultStorage' => ConfigHelper::temporaryStorage(),
    'defaultValidator' => ConfigHelper::defaultValidator(),

    'scenarios' => [
        FileScenario::OpenGraph->value => TagerImageScenario::wrap([
            'storage' => ConfigHelper::fileStorage('open-graph'),
            'validator' => ConfigHelper::openGraphValidator(),
            'thumbnail' => ConfigHelper::openGraphThumb()
        ]),
        FileScenario::Content->value => TagerImageScenario::wrap([
            'storage' => ConfigHelper::fileStorage('content'),
            'validator' => ConfigHelper::imageValidator(),
        ]),
        FileScenario::UserFile->value => [
            'storage' => ConfigHelper::fileStorage('userfiles', 0),
            'validator' => ConfigHelper::defaultValidator(100),
            'saveOriginalFilename' => true
        ],
    ]
];
