@extends('admin.layouts.header')

@section('title', 'Editar ramais')

@section('content')
    @if (session('messages'))
        <div class="btn btn-success">
            {{ session('messages') }}
        </div>
    @endif

    <section class="card">
        <section class="content" class="background">
            <div class="content-title nav flex-column nav justify-content-left">
                <div class="container-fluid ConteudoCard">
                    <form class="form-floating" action="{{ route('ramais.update', $ramais->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="n" value="n">
                        <div class="col-md-6 ConteudoCard">
                            <h3>Editar Ramal</h3>

                            <div class="form-floating">

                                <input type="text" class="form-control" name="ramal"
                                    value="{{ $ramais->ramal ?? old('ramal') }}">
                                <label for="floatingInputValue">Ramal</label>
                            </div>
                            <br>
                            <div class="form-floating">

                                <input type="text" class="form-control" name="nome_ramal"
                                    value="{{ $ramais->nome_ramal ?? old('nome_ramal') }}">
                                <label for="floatingInputValue">Nome</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <select class="form-select form-floating" id="floatingSelect"
                                    aria-label="Floating label select example" name="tipo">
                                    <option value="WEB"
                                        @php if ($ramais['tipo'] == 'WEB') {
                                    echo 'selected';
                                } @endphp>
                                        WEB</option>
                                    <option value="SIP"
                                        @php if ($ramais['tipo'] == 'SIP') {
                                    echo 'selected';
                                } @endphp>
                                        SIP</option>
                                </select>
                                <label for="floatingSelect">Tipo</label>
                            </div>
                            <br>

                            <div class="form-floating">

                                <input type="TEXT" class="form-control" name="bina"
                                    value="{{ $ramais->bina ?? old('bina') }}">
                                <label for="floatingInputValue">Bina</label>
                            </div>
                            <br>
                            <div class="form-floating">

                                <select class="form-select form-floating" id="floatingSelect"
                                    aria-label="Floating label select example" name="cliente_id">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}"
                                            @if ($cliente->id === $ramais->cliente_id) {{ 'selected' }} @endif>
                                            {{ $cliente->nome }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Clientes</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-primary" href="{{ route('ramais.show') }}">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
@endsection
