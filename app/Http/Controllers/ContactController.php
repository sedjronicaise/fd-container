<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact/create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' =>'required',
            'email' =>'required|email',
            'message' =>'required'
        ]);

        Mail::to('sedjronicaise@gmail.com')->send(new ContactMail( $data))->from('contact@fd-containers.com');

        
        return redirect('contact')->with('message', 'Votre message a bien été envoyé');
    }
}














// ou bien ceci ======> session()->flash('message', 'Votre message a bien été envoyé');