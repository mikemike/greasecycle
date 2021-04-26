@component('mail::message')
    Callback Request

    you have a callback request for greasecycle {{$reqtype}} services.
    please see details below.

    details:
    Contact Name- {{$name}}
    Company- {{$company}}
    Email- {{$email}}
    Telephone- {{$telephone}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
