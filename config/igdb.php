<?php

declare(strict_types=1);

return [
    /**
     * These are the credentials you got from https://dev.twitch.tv/console/apps.
     */
    'credentials' => [
        'client_id' => env('TWITCH_CLIENT_ID', 'u8iny79gzww769sc6e7jfksi1ed8ts'),
        'client_secret' => env('TWITCH_CLIENT_SECRET', 'b4uaeipp7k0vooosbl41xneccqmk1c'),
    ],

    /**
     * This package caches queries automatically (for 1 hour per default).
     * Here you can set how long each query should be cached (in seconds).
     *
     * To turn cache off set this value to 0.
     */
    'cache_lifetime' => env('IGDB_CACHE_LIFETIME', 3600),

    /**
     * Path where the webhooks should be handled.
     */
    'webhook_path' => 'igdb-webhook/handle',

    /**
     * The webhook secret.
     *
     * This needs to be a string of your choice in order to use the webhook
     * functionality.
     */
    'webhook_secret' => env('IGDB_WEBHOOK_SECRET'),
];
