@extends('layouts.main-layout')
@section('content')
<div class="content">
    <h2>Aggiorna Dati</h2>
    {{-- la action del form punta alla route pagamento-update che è una route in post. come argomento arriverà l'id dello specifico record della tabella pagamenti visualizzato in questa pagina. Inoltra arriveranno i dati del form che si possono recuperare con Request $request --}}
    <form action=" {{ route('pagamento-update', $pagamento -> id) }} " method="POST">
    {{-- queste due righe sono fondamentali per laravel. csrf è un controllo di sicurezza con cui laravel genera un codice che viene verificato in modo da sapere che la richiesta viene da fonte "interna" --}}
    @csrf
    @method('POST')
    <label for="status">Status</label>
    {{-- negli input è importante inserire l'attributo name="" che sarà la chiave mentre il value sarà il valore nell'oggetto mandato al controller. Questo chiave è la stessa utilizzata nel database (per intenderci il nome della colonna) Quindi deve corrispondere --}}
    <input type="text" name="status" value=" {{ $pagamento -> status }} ">
    <label for="price">Price</label>
    <input type="text" name="price" value=" {{ $pagamento -> price }} ">
    {{-- è importante che il bottone sia di tipo submit --}}
    <button type="submit">Salva</button>
    </form>
</div>  
@endsection