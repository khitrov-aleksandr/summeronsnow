<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        //$a = null;
        //$a = false;

        /*
        if (!empty($a)) {
            echo 'Var $a exist fn "empty"' . '<br>';
        }
        */

        if (isset($a)) {
            echo 'Var $a exist' . '<br>';
        }

        echo 'Test ended';
    }
}
