@component('mail::message')
# {{$data['title']}}

{{$data['corps']}}

@component('mail::button', ['url' => $url , 'color' => 'success'])
Reset password link
@endcomponent

This link expires after 5 minutes.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
