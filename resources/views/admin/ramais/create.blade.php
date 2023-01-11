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
                <form class="form-floating" action="{{ route('ramais.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="n" value="n">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Ramal</h3>

                        <div class="form-floating">

                            <input type="text" class="form-control" name="ramal">
                            <label for="floatingInputValue">Ramal</label>
                        </div>
                        <br>

                        <div class="form-floating">

                            <input type="TEXT" class="form-control" name="nome_ramal">
                            <label for="floatingInputValue">Nome</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo">

                                <option selected>Selecione</option>
                                <option value="SIP">SIP</option>
                                <option value="WEB">WEB</option>
                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                        <br>

                        <div class="form-floating">

                            <input type="TEXT" class="form-control" name="bina">
                            <label for="floatingInputValue">Bina</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="cliente_id">

                                <option selected>Selecione</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
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

