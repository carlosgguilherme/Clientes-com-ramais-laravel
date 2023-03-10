@extends('admin.layouts.header')

@section('title', 'Ramais')

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

                <td><a href="{{ route('ramais.create') }}"><button class="btn btn-success btn-sm" type="submit">Criar
                            Ramal</button></a></td>
            </div>

            <section class="content" class="background">
                <div class="content-title nav flex-column nav justify-content-left">
                    <div class="container-fluid">
                        <ul class="nav flex-column nav justify-content-left" style="margin-left: 1px;margin-right: 1px;">
                            <li class="nav-item">
                                <p>
                                <h3>RAMAIS</h3>
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Ramal</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Bina</th>
                                            <th scope="col">Cliente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($clientes as $ramal)
                                                <th scope="row">{{ $ramal->id }}</th>
                                                <td>{{ $ramal->ramal }}</td>
                                                <td>{{ $ramal->nome_ramal }}</td>
                                                <td>{{ $ramal->tipo }}</td>
                                                <td>{{ $ramal->bina }}</td>
                                                <td>{{ $ramal->nome }}</td>
                                                <td>
                                                    <form method="post" action="{{ route('ramais.destroy', $ramal->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                            type="submit">Deletar</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{ route('ramais.edit', $ramal->id) }}"><button
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
