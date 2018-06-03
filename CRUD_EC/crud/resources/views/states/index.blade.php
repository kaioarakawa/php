@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Estados
                    <a href="/state/create" class="float-right btn btn-success">Novo Estado</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        
                        @foreach($states as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nome_estado }}</td>
                                <td>
                                    <a href="/state/{{ $p->id }}/edit" class="btn btn-warning">Editar</a>
                                    <a href="/state/{{ $p->id }}/delete" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
