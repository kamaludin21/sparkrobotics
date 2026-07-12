New Contact Message

Name    : {{ $data['full_name'] ?? '-' }}
Company : {{ $data['company'] ?: '-' }}
Email   : {{ $data['email'] ?? '-' }}
Phone   : {{ $data['phone'] ?? '-' }}

Message:
{{ $data['message'] ?? '-' }}

--
Check details at admin panel
{{ config('app.url') }}