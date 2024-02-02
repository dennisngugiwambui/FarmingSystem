@component('mail::message')
    <h2>New Contact Form Submission</h2>

    <strong>Name:</strong> {{ $data->name }}
    <strong>Email:</strong> {{ $data->email }}
    <strong>Subject:</strong> {{ $data->subject }}
    <strong>Message:</strong> {{ $data->message }}

    <hr>

    <p>Thank you for contacting us!</p>
@endcomponent
