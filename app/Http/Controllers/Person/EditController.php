<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Person $person)
    {
        return $person;
    }
}