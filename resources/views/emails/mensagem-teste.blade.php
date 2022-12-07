@component('mail::message')
# Introdução

O corpo da mensagem 
-Opção 1
-Opção 2

@component('mail::button',['url'=>''])
Texto do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
