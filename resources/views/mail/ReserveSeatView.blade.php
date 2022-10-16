@component('mail::message')

Hello {{$attributes['firstName']}},

This email is to confirm your reservation for flight {{$flight->flightNumber}} departing from {{$flight->departure}} and arriving at {{$flight->arrival}}.

Have a safe flight!

@endcomponent