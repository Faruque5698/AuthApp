@component('mail::message')
# Welcome to my Authentication and Mail

I would like to thank u for watching this work

@component('mail::button', ['url' => 'https:://www.facebook.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
