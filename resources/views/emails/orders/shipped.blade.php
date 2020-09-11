@component('mail::message')


Your Course token {{ $token }}.
<br>
Expiring on {{$expiry_date->format('h :i a - D d M Y')}}


Thanks,<br>
AT_academy
@endcomponent
