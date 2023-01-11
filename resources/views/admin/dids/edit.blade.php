@include('admin.layouts.header')

@if (session('messages'))
    <div class="btn btn-success">
        {{ session('messages') }}
    </div>
@endif

<section class="card">
    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">
                <form class="form-floating" action="{{ route('dids.update', $dids->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="n" value="n">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Dids</h3>

                        <div class="form-floating">

                            <input type="text" class="form-control" name="numero"
                                value="{{ $dids->numero ?? old('numero') }}">
                            <label for="floatingInputValue">DID</label>
                        </div>
                        <br>

                        <div class="form-floating">

                            <input type="TEXT" class="form-control" id="descricao" name="descricao"
                                value="{{ $dids->descricao ?? old('descricao') }}">
                            <label for="floatingInputValue">Descrição</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="cliente_id">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}"
                                        @if ($cliente->id === $dids->cliente_id) {{ 'selected' }} @endif>
                                        {{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Clientes</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="{{ route('dids.show') }}">Voltar</a>
                    </div>
                </form>
    </section>
</section>
