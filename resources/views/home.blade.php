@extends('layouts.main-layout')
@section('content')
<div class="content">
    <h2>Welcome</h2>
    <div class="nav">
        <ul>
            <li><a href="{{ route('paganti-index')}}">Paganti</a></li>
            <li><a href="{{ route('pagamenti-index')}}">Pagamenti</a></li>
        </ul>
    </div>
</div>
@endsection