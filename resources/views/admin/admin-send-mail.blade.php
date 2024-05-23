@component('mail::message')
# New Message from WorkHobbit

{{ $message }}

Regards,<br>
{{ config('app.name') }}
@endcomponent
