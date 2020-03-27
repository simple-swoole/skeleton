<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */

return [
    'mode' => SWOOLE_PROCESS,
    'http' => [
        'ip' => '0.0.0.0',
        'port' => 9501,
        'sock_type' => SWOOLE_SOCK_TCP,
        'callbacks' => [
        ],
        'settings' => [
            'worker_num' => swoole_cpu_num(),
        ],
    ],
    'ws' => [
        'ip' => '0.0.0.0',
        'port' => 9502,
        'sock_type' => SWOOLE_SOCK_TCP,
        'callbacks' => [
            "open" => [\App\Events\WebSocket::class, 'onOpen'],
            "message" => [\App\Events\WebSocket::class, 'onMessage'],
            "close" => [\App\Events\WebSocket::class, 'onClose'],
        ],
        'settings' => [
            'worker_num' => swoole_cpu_num(),
            'open_websocket_protocol' => true,
        ],
    ],
];
