{{-- Plain-text email: values are output raw because nothing here is rendered as HTML. --}}
New enquiry from the RAD Best Business Group website

Name: {!! $contact->name !!}
Phone: {!! $contact->phone !!}
Email: {!! $contact->email !!}
Company: {!! $contact->company ?: '—' !!}

{!! $contact->message ?: '(no message)' !!}

Received {{ $contact->created_at->format('j M Y, H:i') }}
