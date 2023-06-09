@component("mail::message")

# Salutare {{ $name }},

# Ne bucurăm sa te anunțăm ca ai o nouă programare cu unul din specialiștii noștrii!
# Mai exact cu dmn. doctor {{ $specialist }}, în data de {{ $date }}, la ora {{ $time }}

@component('mail::button', ['url' => "http://localhost:4200/specialist-booking"])
Vezi toate ședințele pragramate cu specialiștii noștrii
@endcomponent

{{ config('APP_NAME') }}

@endcomponent
