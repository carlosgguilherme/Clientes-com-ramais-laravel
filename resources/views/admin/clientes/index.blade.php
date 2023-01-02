@extends('admin.layouts.header')

@section('nome', 'Listagem')
    
{{-- @section('content')
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

<h1>Clientes</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Endereço</th>
            <th scope="col">Tipo</th>
            <th scope="col">Documento</th>

        </tr>

    </thead>

    <tbody>
        <tr>
@foreach ($clientes as $cliente)
    <th scope="row"><?= $cliente['id']?></th>
    <td><?= $cliente['nome']?></td>
    <td><?= $cliente['telefone']?></td>
    <td><?= $cliente['email']?></td>
    <td><?= $cliente['endereco']?></td>
    <td><?= $cliente['tipo']?></td>
    <td><?= $cliente['documento']?></td>
        <div>
        <td>
            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
        </td>
        <td>
            <a href="{{ route('clientes.edit', $cliente->id) }}"><button class="btn btn-primary btn-sm" type="submit">Editar</button></a> 
        </td>
        </div>
@endforeach
{{-- <hr>
@if(isset($filters))
    {{ $clientes->appends($filters)->links() }}
@else
    {{ $clientes->links() }}
@endif


    
@endsection --}}