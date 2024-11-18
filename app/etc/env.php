<?php
return [
    'backend' => [
        'frontName' => 'admin_1mpms0'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1,
        'amqp' => [
            'host' => '172.17.0.2',
            'port' => '5672',
            'user' => 'user',
            'password' => 'password'
        ]
    ],
    'crypt' => [
        'key' => 'c50d735c7dcfb205042a8572da72b104'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '172.17.0.2',
                'dbname' => 'mint',
                'username' => 'root',
                'password' => 'root1324',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => '127.0.0.1',
            'port' => 6379,
            'password' => '',
            'timeout' => 2.5,
            'persistent_id' => '',
            'database' => 1,
            'max_lock_time' => 120,
            'min_lifetime' => 7200,
            'max_lifetime' => 86400
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'database' => 0,
                    'port' => 6379,
                    'password' => '',
                    'persistent_id' => '',
                    'timeout' => 2.5,
                    'read_timeout' => 10,
                    'compress_threshold' => 2048,
                    'compress' => true
                ]
            ],
            'page_cache' => [
                'id_prefix' => 'b4d_'
            ]
        ],
        'allow_parallel_generation' => false,
        'graphql' => [
            'id_salt' => 'E9c7285uQRHrNnbY6o2I3Fn4k3WIptXi'
        ]
    ],
    'system' => [
        'default' => [
            'web' => [
                'graphql' => [
                    'cors_allowed_origins' => 'http://localhost:3000',
                    'cors_allowed_methods' => 'POST, OPTIONS, PUT, GET, DELETE',
                    'cors_allowed_headers' => 'Content-Currency, Store, X-Magento-Cache-Id, X-Captcha, Content-Type, Authorization, DNT, TE',
                    'cors_max_age' => '86400',
                    'cors_allow_credentials' => 5
                ],
                'api_rest' => [
                    'cors_allowed_origins' => 'http://localhost:3000',
                    'cors_allowed_methods' => 'GET, POST, OPTIONS, DELETE, PUT',
                    'cors_allowed_headers' => 'Content-Currency, Store, X-Magento-Cache-Id, X-Captcha, Content-Type, Authorization, DNT, TE',
                    'cors_max_age' => '86400',
                    'cors_allow_credentials' => 5
                ]
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'mint.local'
    ],
    'install' => [
        'date' => 'Tue, 15 Oct 2024 11:03:33 +0000'
    ]
];
