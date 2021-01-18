<?php

use Monolog\Logger;

return [
    'settings' => [
        'debugMode' => (getenv('DEBUG_MODE') == 'true'),
        'displayErrorDetails' => (getenv('DISPLAY_ERROR') == 'true'),
        'logger' => [
            'name' => 'slim-config',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../var/logs/app.log',
            'level' => Logger::DEBUG,
        ],
        'view' => [
            'template_path' => __DIR__ . '/../templates',
            'cache_path' => __DIR__ . '/../var/cache',
            'compiled_path' => __DIR__ . '/../templates_c',
        ],
        'db' => [
            'connection' => 'mysql',
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT') ?? 3306,
            'dbname' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'password' => getenv('DB_PW')
        ],
        'csrf' => [
            'ttl' => 3600
        ]
    ]
];
