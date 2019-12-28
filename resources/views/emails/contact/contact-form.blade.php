@component('mail::message')
#
Vous avez recu un mail de la part de {{$data['name']}} <br> Son email est: ({{$data['email']}}) <br>

Voici son Message:

{{$data['message']}}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
