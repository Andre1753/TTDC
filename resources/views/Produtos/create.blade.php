@extends('layouts.app')

@section('content')
<div class="col-md-2"></div>
<div class="col-md-8 fbranco">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar novo produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('produtos.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do produto</strong>
                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição do produto</strong>
                    <textarea class="form-control" style="height:50px" name="descricao"
                        placeholder="Descrição"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade do produto</strong>
                    <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: green">Criar Produto</button>
            </div>
        </div>
    </form>
</div>
@endsection