@extends('layouts.main-layout')
@section('content')
<div class="content">
    <h2>Aggiorna Dati</h2>
    <form action=" {{ route('pagamento-update', $pagamento -> id) }} " method="POST">
    @csrf
    @method('POST')
    <label for="status">Status</label>
    <input type="text" name="status" value=" {{ $pagamento -> status }} ">
    <label for="price">Price</label>
    <input type="text" name="price" value=" {{ $pagamento -> price }} ">
    <button type="submit">Salva</button>
    </form>
</div>  
@endsection