<?php

$imageValidator = [
    'maxSize' => 20 * 1024 * 1024,
    'checkExtensionByMimeType' => true,
    'extensions' => ['jpg', 'jpeg', 'png']
];

function fileStorage($folder)
{
    return [
        'type' => 'file',
        'saveOriginalFilename' => false,
        'uploadDirPath' => __DIR__ . '/../storage/app/public/default/' . $folder,
        'uploadDirUrl' => '/uploads/' . $folder,
    ];
}

return [
    'defaultStorage' => fileStorage('tmp'),

    'defaultValidator' => [
        'maxSize' => 50 * 1024 * 1024,
        'checkExtensionByMimeType' => true,
        'extensions' => ['jpg', 'jpeg', 'png', 'zip', 'docx', 'pdf', 'doc', 'rar', 'xls', 'xlsx', 'pptx', 'ppt', 'gif', 'mp4']
    ],

    'scenarios' => [
        'default' => [
            'storage' => fileStorage('default'),
            'validator' => $imageValidator,
            'thumbnails' => [
                'preview' => [
                    'width' => 380,
                    'height' => 250,
                    'crop' => true,
                    '2x' => true,
                    'webp' => true,
                    'quality' => 100
                ],
                'og' => [
                    'width' => 1200,
                    'height' => 630,
                    'exact' => true
                ],
            ]
        ],
    ]
];
