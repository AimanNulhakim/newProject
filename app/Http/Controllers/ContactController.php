<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notes;

class ContactController extends Controller
{
    public function CreatePage(){

        return view('contact.create');

    }

    public function CreateContact(Request $request){

        $this->validate($request, [

            'name' => 'required',
            'phoneNum' => 'required'
        ]);

        $note = new Notes();
        $note->name = $request->name;
        $note->phoneNum = $request->phoneNum;
        $note->save();

        return redirect()->back();

    }

    public function UpdateContact(){

        

    }
}
