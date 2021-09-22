@component('mail::message')
# {{$data['title']}}

{{$data['corps']}}

We are happy to have you in our team

{{-- @component('mail::button', ['url' => $url , 'color' => 'success'])
Reset password link
@endcomponent --}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
