<x-mail::message>
# Hello

You have been made the Administrator of a Organisation Of Persons with disabilities {{ $name }}.
<br> Please find your login details below.
<br><br>

Email: <b>{{ $email }} </b>

Password: <b> {{ $password }} </b>

<x-mail::button :url="url('/')">
Click Here!
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>