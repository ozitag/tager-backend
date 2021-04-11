<?php

use \OZiTAG\Tager\Backend\Backup\Enums\BackupSourceType;

return [
    'auto_backup' => getenv('TAGER_AUTOBACKUP_ENABLED'),

    'sources' => [
        [
            'type' => BackupSourceType::DATABASE,
            'connection' => 'mysql',
            'frequency' => [
                'value' => 'daily',
            ],
            'destination' => [
                'disk' => 'sftp-backup',
                'path' => 'autobackup/' . getenv('APP_NAME')
                    . '/' . getenv('APP_ENV')
            ]
        ],
    ],

    'default_source' => [
        'temp_disk' => 'local',
        'temp_directory' => 'temp',
        'destination' => [
            'disk' => 'local',
            'path' => 'backups'
        ],
        'frequency' => [
            'cron_value' => null,
            'value' => 'daily',
        ],
        'encryption' => [
            'algorithm' => ZipArchive::EM_AES_256,
            'password' => getenv('TAGER_AUTOBACKUP_ENCRYPT_PASSWORD'),
        ],
        'archive_prefix' => '',
    ],
];
