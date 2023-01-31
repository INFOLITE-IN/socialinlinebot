<?php
/**
 * Inline Games - Telegram Bot (@socialinlinebot)
 *
 * (c) 2016-2021 kaviyarasan <kaviyarasan1997ceo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Custom configuration
 */

return [
    'commands' => [
        'configs' => [
            'cleansessions' => [
                'clean_interval' => 3600,
            ],
        ],
    ],
    'webhook'  => [
        'max_connections' => 5,
    ],
    'logging'  => [
        'error' => DATA_PATH . '/logs/Error.log',
    ],
];
