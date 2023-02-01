@extends('admin.layouts.header')

@section('title', 'Clientes')

@section('content')
    <section class="card">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        @if (session('messageDelete'))
            <div class="alert alert-danger" role="alert">
                {{ session('messageDelete') }}
            </div>
        @endif
        <div>
            <div class="card-header">
                <td><a href="{{ route('clientes.create') }}"><button class="btn btn-success btn-sm" type="submit">Criar
                            Cliente</button></a></td>
            </div>
            <section class="content" class="background">
                <div class="content-title nav flex-column nav justify-content-left">
                    <div class="container-fluid">
                        <ul class="nav flex-column nav justify-content-left" style="margin-left: 1px;margin-right: 1px;">
                            <li class="nav-item">
                                <p>
                                <h3>CLIENTES</h3>
                                </p>
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
                                                <th scope="row">{{ $cliente->id }}</th>
                                                <td>{{ $cliente->nome }}</td>
                                                <td>{{ $cliente->telefone }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td>{{ $cliente->endereco }}</td>
                                                <td>{{ $cliente->tipo }}</td>
                                                <td>{{ $cliente->documento }}</td>


                                                <form method="post"
                                                    action="{{ route('clientes.destroy', $cliente->id) }}">
                                                    @csrf <td>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button onclick="return confirm('Quer realmente excluir?')"
                                                            class="btn btn-danger btn-sm" type="submit">Deletar</button>
                                                    </td>
                                                </form>

                                                <td>
                                                    <a href="{{ route('clientes.edit', $cliente->id) }}"><button
                                                            class="btn btn-primary btn-sm"
                                                            type="submit">Editar</button></a>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
