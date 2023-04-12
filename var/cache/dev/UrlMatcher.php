<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/job' => [[['_route' => 'app_job', '_controller' => 'App\\Controller\\JobController::index'], null, null, null, false, false, null]],
        '/add_job' => [[['_route' => 'job_add', '_controller' => 'App\\Controller\\JobController::add_job'], null, null, null, false, false, null]],
        '/property' => [[['_route' => 'app_reporting', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
