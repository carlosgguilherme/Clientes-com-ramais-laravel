@include('admin.layouts.header')

<section>
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



    <div class="card">
        @foreach ($clientes as $cliente)
            <div class="card-header">
                <p><h3> <i class="bi bi-person"></i>{{ $cliente->nome }}</h3></p>
            </div>
            <section class="contentRelations">
                <div class="content-title nav flex-column nav justify-content-left">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-light">
                                        <H1>Dids</H1>
                                        <tr>
                                            <th>ID</th>
                                            <th>Número</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    @foreach ($cliente->dids as $dids)
                                        <tbody>
                                            <tr>
                                                <td>{{ $dids->id }}</td>
                                                <td>{{ $dids->numero }}</td>
                                                <td>{{ $dids->descricao }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <hr>
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-light">
                                        <H1>Ramais</H1>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ramal</th>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Bina</th>
                                        </tr>
                                    </thead>
                                    @foreach ($cliente->ramais as $ramal)
                                        <tbody>
                                            <tr>
                                                <td>{{ $ramal->id }}</td>
                                                <td>{{ $ramal->ramal }}</td>
                                                <td>{{ $ramal->nome_ramal }}</td>
                                                <td>{{ $ramal->tipo }}</td>
                                                <td>{{ $ramal->bina }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach
    </div>
</section>
