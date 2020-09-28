@extends('layouts/main-layout')

@section('content')
    <div class="content">
        
        <h2>Elenco Paganti</h2>

        <ul>
            @foreach ($paganti as $pagante)
                <li> ID: {{ $pagante -> id }}
                    Nome: {{ $pagante -> name }}
                    {{ $pagante -> lastname }}
                </li>
            @endforeach

        </ul>

    </div>
@endsection