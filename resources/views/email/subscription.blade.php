@component('mail::message')
# Berlangganan Di Website MeatNauli

Terimakasih Telah Berlangganan,Tetap Nantikan Informasi-Informasi Dari Kami!

@component('mail::button', ['url' => 'https://meatnauli.gahasapurba.com/'])
Kembali Ke Website
@endcomponent

Salam Kami,<br>
{{ config('app.name') }}
@endcomponent
