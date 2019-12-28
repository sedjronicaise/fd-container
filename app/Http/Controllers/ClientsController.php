<?php

namespace App\Http\Controllers;

use App\Client;
use App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // public function __construct(){

    //     $this->middleware('auth')->except(['index', 'create']) ;       
    // }

    public function index(){
        
        $clients = Client::all();
        
        return view('clients.index', compact('clients'));
    }


    public function create(){

        $client = new client();

        return view('clients.create', compact('client'));

    }

    public function store(){

     $data = request()->validate([
            'fullname' =>'required|min:3',
            'email' =>'required|email',
            'current_address' =>'required',
            'destination_address' =>'required',
            'custumer_address' =>'required',
            'zip_code' =>'required',
            'phone_number' =>'required',
            'tracking_number' =>'required|min:10',

            'sender_fullname' =>'required|min:3',
            'sender_email' =>'required|email',
            'sender_current_address' =>'required',
            'sender_zip_code' =>'required',
            'sender_phone_number' =>'required',
        ]);
        
        Client::create($data);

        return redirect()->route('clients.index')->with('success', 'Enregistrement effectué');
    }

    public function show(Client $client){

        // $client = Client::where('id',$client)->firstOrFail();

        return view('clients.show', compact('client'));

    }

    public function edit(Client $client){

        return view('clients.edit', compact('client'));

    }

    public function update(Client $client){

        $data = request()->validate([
            'fullname' =>'required|min:3',
            'email' =>'required|email',
            'current_address' =>'required',
            'destination_address' =>'required',
            'zip_code' =>'required',
            'phone_number' =>'required',
            'tracking_number' =>'required|min:10',

            'sender_fullname' =>'required|min:3',
            'sender_email' =>'required|email',
            'sender_current_address' =>'required',
            'sender_zip_code' =>'required',
            'sender_phone_number' =>'required',
        ]);

        $client->update($data);

        return redirect()->route('clients.show', $client->id)->with('success', 'Enregistrement effectué');

    }

    
    public function destroy(Client $client){

        $client->delete();

        return redirect('clients');
    }

    // public function track(Request $request) {

    //     $trackingNumber = $request->get('tracking_number');

    //     $client = Client::where('tracking_number', $trackingNumber)->first();

    //     if(!$client) {
    //         return redirect()->back('Ce numero est invalide');
    //     }
    // }
}
