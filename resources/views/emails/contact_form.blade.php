@component('mail::message')
    <h2>New Contact Form Submission</h2>

    <strong>Name:</strong> {{ $contact->name }}
    <strong>Email:</strong> {{ $contact->email }}
    <strong>Subject:</strong> {{ $contact->subject }}
    <strong>Message:</strong> {{ $contact->message }}

    <hr>

    <p>Thank you for contacting us!</p>
@endcomponent
