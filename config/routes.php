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
    ['GET', '/', '\App\Controller\IndexController@index'],
    ['POST', '/', '\App\Controller\IndexController@index'],
    ['GET', '/test/{id:\d+}', '\App\Controller\IndexController@test'],
    // ico应该使用enable_static_handler
    ['GET', '/favicon.ico', '\App\Controller\IndexController@favicon'],
];
