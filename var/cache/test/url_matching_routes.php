<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => ['App\\Infrastructure\\Http\\Security\\Controller\\SecurityController', 'logout']], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'homepage', '_controller' => ['App\\Infrastructure\\Http\\HomePageController', 'index']], null, ['GET' => 0], null, false, false, null]],
        '/health-check' => [[['_route' => 'health-check', '_controller' => ['App\\Infrastructure\\Http\\HealthCheckAction', '__invoke']], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => ['App\\Infrastructure\\Http\\Security\\Controller\\SecurityController', 'login']], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => ['App\\Infrastructure\\Http\\Security\\Controller\\SecurityController', 'profile']], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => ['App\\Infrastructure\\Http\\Security\\Controller\\SecurityController', 'register']], null, null, null, false, false, null]],
        '/select_teachers' => [[['_route' => 'select_teachers', '_controller' => ['App\\Infrastructure\\Http\\Teacher\\Controller\\TeacherController', 'selectTeachers']], null, null, null, false, false, null]],
        '/teachers' => [[['_route' => 'teachers_get_all', '_controller' => ['App\\Infrastructure\\Http\\Teacher\\Controller\\TeacherController', 'getAll']], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/teachers/([0-9]+)(*:25)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [
            [['_route' => 'teacher_get_by_id', '_controller' => ['App\\Infrastructure\\Http\\Teacher\\Controller\\TeacherController', 'getById']], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
