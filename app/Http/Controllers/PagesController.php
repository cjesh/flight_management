<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function form()
    {
        $data = [
            'name' => 'dd',
            'age' => 18
        ];
        return view('welcome')->with($data);
    }

    public function create()
    {
        $data = [
            'name' => 'shreejesh',
            'klass' => 12

        ];
        return view('create')->with($data)
    }


}
