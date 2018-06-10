@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario de Carro</div>

                <div class="card-body">
                    <form action="{{ route('admin.carro.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="placa">placa</label>
                            <input type="text" name="placa" class="form-control" id="placa" aria-describedby="placaHelp" placeholder="AAA-1111">
                            <small id="placaHelp" class="form-text text-muted">Exemplo: AAA-1111.</small>
                        </div>
                        <div class="form-group">
                            <label for="renavam">Renavam</label>
                            <input type="text" name="renavam" class="form-control" id="renavam" aria-describedby="renavamHelp" >
                            <small id="renavamHelp" class="form-text text-muted">digite 20 digitos.</small>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" class="form-control" id="marca" aria-describedby="marcaHelp">
                            <small id="marcaHelp" class="form-text text-muted">Exemplo.: Honda.</small>
                        </div>
                        <div class="form-group">
                            <label for="proprietario">Proprietário</label>
                            <input type="text" name="proprietario" class="form-control" id="proprietario" aria-describedby="proprietarioHelp">
                            <small id="proprietarioHelp" class="form-text text-muted">Exemplo.: teste@email.com.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
