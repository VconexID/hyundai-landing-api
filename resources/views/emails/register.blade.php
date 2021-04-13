@component('mail::message')
# Selamat {{ $visitor->full_name }}

Email dengan nama <b>{{ $visitor->email }}</b>,<br>
Telah berhasil terdaftar di Hyundai RSVP

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent