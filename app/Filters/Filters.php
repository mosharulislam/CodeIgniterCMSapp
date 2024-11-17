<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'auth'     => \App\Filters\Auth::class, // Register the auth alias here
    ];

    public $globals = [
        'before' => [
            // 'csrf',
        ],
        'after'  => [
            'toolbar',
        ],
    ];

    public $methods = [];

    public $filters = [];
}
