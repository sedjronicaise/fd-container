@extends('layouts.app')

@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
                <h2>Listes des clients</h2>            
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    
    <div class="form-group mt-3">
        <a href="/clients/create" class="button button-contactForm btn_4">Ajouter un nouveau client</a>
    </div>
    <h2 class="text-center">Informations sur les clients</h2><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Code Postal</th>
            <th scope="col" class="text-danger">Numero de tracking</th>
            <th scope="col">Adresse du client</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->fullname }}</a></td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->zip_code }}</td>
                <td class="text-danger">{{ $client->tracking_number }}</td>
                <td>{{ $client->current_address }}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>  
    <h2 class="text-center">Informations liées aux expéditeurs de chaque client</h2>     
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom complet de l'expéditeur</th>
            <th scope="col">Email de l'expéditeur</th>
            <th scope="col">Code Postal de l'expéditeur</th>
            <th scope="col">Numero de télephone de l'expéditeur</th>
            <th scope="col">Adresse de l'expéditeur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->sender_fullname }}</a></td>
                <td>{{ $client->sender_email }}</td>
                <td>{{ $client->sender_current_address }}</td>
                <td>{{ $client->sender_zip_code }}</td>
                <td>{{ $client->sender_phone_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    

</div>
@endsection
