@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Novo Produtos                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => "/city/$city->id", 'method' => 'delete']) !!}
                    <input type="hidden" name="id" value="{{$city->id}}"/>
                    <div class="alert alert-danger"> Deseja excluir o Produto?
                    </div>
                    <div class="form actions">
                        {{Form::submit('Sim', array('class' => 'btn btn-danger'))}}
                        <a href="/city" type="btn" class="btn btn-default">Não</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection