@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario de Carro</div>

                <div class="card-body">
                    <form action="{{ route('admin.car.update', ['id' => $car->id]) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $car->id }}">
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">Proprietário</label>
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="optionSelect" disabled selected>Proprietário</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" >{{ $user->email }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="placa">placa</label>
                            <input type="text" name="placa" value="{{ $car->placa }}" class="form-control" id="placa" aria-describedby="placaHelp" placeholder="AAA-1111">
                            <small id="placaHelp" class="form-text text-muted">Exemplo: AAA-1111.</small>
                        </div>
                        <div class="form-group">
                            <label for="renavam">Renavam</label>
                            <input type="text" name="renavam" value="{{ $car->renavam }}" class="form-control" id="renavam" aria-describedby="renavamHelp" >
                            <small id="renavamHelp" class="form-text text-muted">digite 20 digitos.</small>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" value="{{ $car->marca }}" class="form-control" id="marca" aria-describedby="marcaHelp">
                            <small id="marcaHelp" class="form-text text-muted">Exemplo.: Honda.</small>
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" value="{{ $car->modelo }}" class="form-control" id="modelo" aria-describedby="modeloHelp">
                            <small id="modeloHelp" class="form-text text-muted">Exemplo.: Civic.</small>
                        </div>
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="text" name="ano" value="{{ $car->ano }}" class="form-control" id="ano" aria-describedby="anoHelp">
                            <small id="anoHelp" class="form-text text-muted">Exemplo.: Honda.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
