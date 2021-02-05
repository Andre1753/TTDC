@extends('layouts.app')

@section('content')
<div class="col-md-2">
</div>    
<div class="col-md-8 fbranco">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $usuario->apelido }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Voltar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $usuario->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apelido:</strong>
                {{ $usuario->apelido }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Idade:</strong>
                {{ $usuario->idade }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                {{ $usuario->telefone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CPF:</strong>
                {{ $usuario->cpf }}
            </div>
        </div>
    </div>
</div>
@endsection