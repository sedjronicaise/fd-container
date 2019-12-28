@extends('layouts.master')

@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
                <div class="breadcrumb_iner_item">
                    <h2>Editer le client</h2>            
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="container">
    <h1>Editer le profile de {{ $client->name }}</h1>
    <hr>
    <form action="/clients/{{ $client->id }}" method="POST" class="form-contact contact_form col-6">
        @method('PATCH')
        @include('includes.form')
        <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm btn_4">Sauvegarder les informations</button>
        </div>
    </form>
</div>

@endsection
