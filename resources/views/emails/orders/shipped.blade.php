@component('mail::message')

    Your Course id  {{ $courseid }}.
    <br>
Your Course token {{ $token }}.
<br>
Expiring on {{$expiry_date}}


Thanks,<br>
AT_academy
@endcomponent
