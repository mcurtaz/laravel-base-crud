@extends('layouts.main-layout')
@section('content')
    <div class="content">
        <h2>Pagamenti</h2>
        <ul>
            @foreach ($pagamenti as $pagamento)
                <li>
                    Pagamento {{ $pagamento -> id }} &nbsp;
                    {{ $pagamento -> status }} &nbsp;
                    {{ $pagamento -> price }}

                    <a href=" {{ route('pagamento-edit', $pagamento -> id) }} ">edit</a>
                    <a href=" {{ route('pagamento-destroy', $pagamento -> id) }}">delete</a>
                </li>
            @endforeach
        </ul>
    </div>
   
@endsection