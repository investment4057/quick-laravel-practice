<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function comp()
    {
        return view('view.comp');

        // $data = [
        //     'msg' => 'こんにちは、世界！'
        //   ];
        // return view('view.comp', $data);
    }
}