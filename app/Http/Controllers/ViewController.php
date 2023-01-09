<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //resource untuk data / proses bisnis yang diolah
        return view('ets');
    }

    function showGreetings() {
        //resource untuk data / proses bisnis yang diolah
        return view('greetingsshow');
    }

    function sayHi(Request $request) {
        //resource untuk data / proses bisnis yang diolah
        return view('greetings');
    }
}
