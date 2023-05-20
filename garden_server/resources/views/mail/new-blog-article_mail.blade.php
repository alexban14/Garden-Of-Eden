@component("mail::message")

# Salutare {{ $name }}

# Postare nouă pe blog de wellness!

@component('mail::button', ['url' => "http://localhost:4200/blog/post/$articleId"])
Accesează postare nouă
@endcomponent

{{ config('APP_NAME') }}

@endcomponent
