@extends('layouts.master')

@section('content' )
<section class="breadcrumb breadcrumb_bg" >
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
                <h2>Ajouter un nouveau client</h2>            
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
    <div class="container my-5 head">
            <h2 class="text-center">Ajout d'un nouveau client</h2> <br>
        <form action="/clients" method="POST" class="form-contact contact_form">
            @include('includes.form')
             
            <div class="form-group mt-3 text-center">
                <button type="submit" class="button button-contactForm btn_4">Ajouter client</button>
            </div>
        </form>
       
    </div>
@endsection
