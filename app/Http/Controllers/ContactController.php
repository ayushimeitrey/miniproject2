<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    function contact(){
        return view('contact');
    }
    function store(Request $request){
        $name = $request-> name;
        return redirect()->route('thanks', ['name' => $name]);
    }

    function thanks($name){
        return view('thankyou')->with(compact('name'));
    }
}
