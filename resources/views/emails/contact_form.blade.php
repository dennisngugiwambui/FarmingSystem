<x-mail::message>
    <h2>Introduction</h2>

    <p>Name: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Subject: {{ $data->subject }}</p>
    <p>Message: {{ $data->message }}</p>

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    <p>Thanks,<br>
        {{ config('app.name') }}
    </p>
</x-mail::message>
