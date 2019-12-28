@extends('layouts.master')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
                <h2>Tracking</h2> 
               
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<main class="container my-5">
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
</main>

<div class="container post_tracking head mb-5">
        <a href="/"> <img src="{{ asset('img/fdclogo.png') }}" class="rounded" height="100" alt="logo"> </a>
    <div class="row">
        @if (!$client)
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                        Ce numéro est invalide!
                </div>
            </div>
        @else
            <div class="col-12">
                <h3>Numéro de suivi : {{ $client->tracking_number }}</h3>
                <h3 style="color:green"><strong>Bienvenu {{ $client->fullname }} Votre colis à bien été enregistré et prêt à être livré</strong> </h3>
                <h4>Adresse actuelle de votre colis: {{ $client->current_address }}</h4>
                <h4>Adresse de destination : {{ $client->destination_address }} </h4>
            </div>
            <div class="col-6" style="border:1px solid #000;">
                <h3 style="color:green"><strong>Vos informations</strong> </h3>
                <ul>
                    <li>Nom et prénom:  {{ $client->fullname }}</li>
                    <li>Email:  {{ $client->email }} </li>
                    <li>Adresse: {{ $client->custumer_address }}</li>
                    <li>Code postale:  {{ $client->zip_code }} </li>
                    <li>Numéro de téléphone: {{ $client->phone_number }}</li>
                </ul>      
            </div>
            <div class="col-6" style="border:1px solid #000;">
                <h3 style="color:green"><strong>Informations liées à votre expéditeur </h3>
                    <ul>
                        <li>Nom et prénom {{ $client->sender_fullname }}</li>
                        <li>Email:  {{ $client->sender_email }} </li>
                        <li>Adresse: {{ $client->sender_current_address }}</li>
                        <li>Code postale:  {{ $client->sender_zip_code }} </li>
                        <li>Numéro de téléphone : {{ $client->sender_phone_number }}</li>
                    </ul>
            </div> <br>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-danger "><strong>NB: Le délai de livraison, varie entre 5 à 8 jours au maximum. Merci pour votre confiance!</strong></h3>
                </div>
            </div>
        @endif
        </div>
 </div>

 @endsection

