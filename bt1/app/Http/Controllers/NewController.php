<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function __invoke($id)
    {
        return 'heloo' . $id;
    }
}
