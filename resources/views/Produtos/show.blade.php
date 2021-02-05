@extends('layouts.app')

@section('content')
<div class="col-md-2">
</div>    
<div class="col-md-8 fbranco">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $produto->nome }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $produto->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $produto->descricao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade:</strong>
                {{ $produto->quantidade }}
            </div>
        </div>
    </div>
</div>
@endsection