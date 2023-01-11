@include('admin.layouts.header')

@if (session('messages'))
    <div class="btn btn-success">
        {{ session('messages') }}
    </div>
@endif

<section class="card">
    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid ConteudoCard">
                <form action="{{ route('clientes.update', $clientes->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="col-md-6">
                        <h3>Editar Clientes</h3>
                        <input type="hidden" name="id" value="{{ $clientes->id }}">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nome" name="nome"
                                value="{{ $clientes->nome ?? old('nome') }}">
                            <label for="floatingInputValue">Nome</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="telefone" name="telefone"
                                value="{{ $clientes->telefone ?? old('telefone') }}">
                            <label for="floatingInputValue">Telefone</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $clientes->email ?? old('email') }}">
                            <label for="floatingInputValue">Email</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                value="{{ $clientes->endereco ?? old('endereco') }}">
                            <label for="floatingInputValue">Endereço</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo">
                                <option value="Fisico"
                                    @php if ($clientes['tipo'] == 'Fisico') {
                                    echo 'selected';
                                } @endphp>
                                    Fisico</option>
                                <option value="Juridico"
                                    @php if ($clientes['tipo'] == 'Juridico') {
                                    echo 'selected';
                                } @endphp>
                                    Juridico</option>
                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="documento"
                                value="{{ $clientes->documento ?? old('documento') }}">
                            <label for="floatingInputValue">CPF/CNPJ</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="{{ route('clientes.show') }}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
