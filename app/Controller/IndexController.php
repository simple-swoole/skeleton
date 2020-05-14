<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */
namespace App\Controller;

class IndexController
{
    public function index($request, $response)
    {
        $response->end(
            json_encode(
                [
                    'method' => $request->server['request_method'],
                    'message' => 'Hello Simps.',
                ]
            )
        );
    }

    public function hello($request, $response, $data)
    {
        $name = $data['name'] ?? 'Simps';

        $response->end(
            json_encode(
                [
                    'method' => $request->server['request_method'],
                    'message' => "Hello {$name}.",
                ]
            )
        );
    }
}
