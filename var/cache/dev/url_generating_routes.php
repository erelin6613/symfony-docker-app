<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\SiteController::index'], [], [['text', '/']], [], []],
    'greetUser' => [['name'], ['name' => null, '_controller' => 'App\\Controller\\SiteController::user'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/user']], [], []],
];
