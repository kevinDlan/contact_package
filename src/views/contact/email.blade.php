@component('mail::message')
# Introduction

Hello there is a new message from {{$name}}
{{$message}}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
