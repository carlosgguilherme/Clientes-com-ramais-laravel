@extends('admin.layouts.header')

@section('nome', 'Listagem')
    
{{-- 
<a href="{{ route('clientes.create') }}">Criar novo Cliente</a>
<hr>
@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif 
<form action="{{ route('clientes.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Buscar</button>
</form>
<br> --}}

{{-- <hr>
@if(isset($filters))
    {{ $clientes->appends($filters)->links() }}
@else
    {{ $clientes->links() }}
@endif


    
@endsection --}}