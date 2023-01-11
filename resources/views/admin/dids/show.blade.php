@include('admin.layouts.header')
<section class="card">
    <div class="card">
        <div class="card-header row">

            <td><a href="{{ route('dids.create') }}"><button class="btn btn-success btn-sm" type="submit">Criar
                        Dids</button></a></td>
        </div>
        <section class="content" class="background">
            <div class="content-title nav flex-column nav justify-content-left">
                <div class="container-fluid">
                    <ul class="nav flex-column nav justify-content-left" style="margin-left: 1px;margin-right: 1px;">
                        <li class="nav-item">
                            <h3>DIDS</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Numero</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Cliente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($clientes as $did)
                                            <th scope="row">{{ $did->id }}</th>
                                            <td>{{ $did->numero }}</td>
                                            <td>{{ $did->descricao }}</td>
                                            <td>{{ $did->nome }}</td>
                                            <td>
                                                <form method="post" action="{{ route('dids.destroy', $did->id) }}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"
                                                        type="submit">Deletar</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('dids.edit', $did->id) }}"><button
                                                        class="btn btn-primary btn-sm"
                                                        type="submit">Editar</button></a>
                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</section>
@endforeach
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
