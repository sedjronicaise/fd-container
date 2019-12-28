@extends('layouts.master')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
                <h2>Appel au: +229 96 03 02 44</h2> 
                <h3>Mail: contact@fdcontainers.com</h3>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<div class="container ">
    <div class="row">
        <div class="offset-3 col-6">
                <main class="container my-5">
                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </main>
                <h1>Laissez nous un message</h1>
            <form action="/contact" class="form-contact contact_form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="client"> Nom</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')  }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <textarea name="message" class="form-control  @error('message') is-invalid @enderror" cols="30" rows="10">{{ old('email')  }}</textarea>
                    @error('message')
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_4">Envoyer mon message</button>
                </div>
            </form>
        </div>
    </div>
</div> 

@endsection
