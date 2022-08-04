<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            ['id' => 1,
            'name' => 'a',
            'age' => 11,
            'job' => 0
                ],
            ['id' => 2,
                'name' => 'b',
                'age' => 22,
                'job' => 1
            ],
            ['id' => 3,
                'name' => 'c',
                'age' => 33,
                'job' => 1
            ],
        ];
        return $persons;
    }
}
