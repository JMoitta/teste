@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carros</div>

                <div class="card-body">
                    <div class="pb-3">
                        <a class="btn btn-primary" href="{{ route('admin.carro.create') }}">Novo</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Proprietário</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Ano</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($carros as $carro)
                            <tr>
                                <td>{{ $carro->id }}</td>
                                <td>Proprietário</td>
                                <td>{{ $carro->modelo }}</td>
                                <td>{{ $carro->marca }}</td>
                                <td>{{ $carro->ano }}</td>
                                <td>
                                    <button class="btn btn-info">Alterar</button>
                                    <button class="btn btn-info">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </form>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{trans('auth.logado')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
