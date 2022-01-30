<?php

use \App\Enums\SettingKey;
use \OZiTAG\Tager\Backend\Fields\Enums\FieldType;

return [
    'section' => [
        SettingKey::TestSetting->value => [
            'type' => FieldType::String,
            'label' => 'Test Setting',
            'value' => 'Test Setting Value',
            'private' => false
        ]
    ]
];
