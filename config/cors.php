<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Origin', 'X-Requested-With', 'Content-Type', 'Accept', 'Authorization'],
    'allowedMethods' => ['get', 'post', 'options', 'delete', 'put', 'patch'],
    'exposedHeaders' => [],
    'maxAge' => 0,
    'hosts' => [],
];