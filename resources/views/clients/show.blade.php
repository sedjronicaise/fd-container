@extends('layouts.app')

@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
                <h2>Editer et supprimer un client</h2>            
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="container">
    <h1>Nom du client : {{ $client->fullname }}</h1>
    <a href="/clients/{{ $client->id }}/edit" class="button button-contactForm btn_4">Editer</a>

    <form action="/clients/{{ $client->id }}" method="POST" class="form-contact contact_form col-12" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="button button-contactForm btn_4">Supprimer</button>
    </form>

    <hr>
    <p><strong>L'e-mail de </strong> <mark>{{ $client->name }}</mark> est : <em>{{ $client->email }}</em></p>
</div>
@endsection
