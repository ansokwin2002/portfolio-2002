<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   
    public function Contact(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'subject'  => 'required',
            'message'  => 'required',

        ]);

        $input = $request->all();

        Message::create($input);
        return back()->with('create_success',"Success");
    }

    public function ReanCode()
    {
        return view('portfolio.reanCode');
    }

}
