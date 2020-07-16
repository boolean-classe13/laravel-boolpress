<h1>Ciao admin!</h1>
<p>Hai ricevuto un nuovo messaggio dal sito web!</p>
<div>
    <strong>Da:</strong> {{ $lead->name }}<br>
    <strong>Email:</strong> {{ $lead->email }}<br>
    <strong>Messaggio:</strong> <br>{{ $lead->message }}
</div>
