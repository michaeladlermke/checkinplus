<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $people = [
            'Buddy','Bubba','Blly'
        ];

        return view('pages.about', compact('people'))->with(
            [
                'first'=> 'Michael',
                'last'=> 'Adler',
            ]
        );
    }

    public function contact(){
        return view('pages.contact');
    }

    public function admin(){
        return view('pages.admin');
    }
    //
}
