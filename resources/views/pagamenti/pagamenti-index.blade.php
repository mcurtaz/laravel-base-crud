@extends('layouts.main-layout')
@section('content')
    <div class="content">
        <h2>Pagamenti</h2>
        <ul>
            @foreach ($pagamenti as $pagamento)
                <li>
                    Pagamento {{ $pagamento -> id }} &nbsp;
                    {{ $pagamento -> status }} &nbsp;
                    {{ $pagamento -> price }} &nbsp;
                    {{-- la route pagamento edit porterà ad una view dove si possono modificare i valori di un record nel database (ovviamente passando dal model che è la rappresentazione della corrispondente tabella del database nell'ecosistema laravel). Come attributo va messo l'id del record in modo che poi si sappia qual è l'elemento da modificare --}}
                    <a href=" {{ route('pagamento-edit', $pagamento -> id) }} ">edit</a>
                    {{-- la route destroy farà una query di delete dell'elemento. Anche qui ovviamente si passa dal model e serve l'id dell'elemento come attributo per sapere quale elemento eliminare --}}
                    <a href=" {{ route('pagamento-destroy', $pagamento -> id) }}">delete</a>
                </li>
            @endforeach
        </ul>
    </div>
   
@endsection