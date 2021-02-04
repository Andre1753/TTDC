@extends('layouts.app')

@section('content')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card=text">
                        Aqui você pode cadastrar todos os seus produtos.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Definir produtos a usuários</h5>
                    <p class="card=text">
                        Aqui você pode definir produtos cadastrados aos seus usuários 
                    </p>
                    <a href="/dd" class="btn btn-primary">Atualizar Produtos</a>
                </div>
            </div>  
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Usuários</h5>
                    <p class="card=text">
                        Aqui você pode registrar seus usuários. 
                    </p>
                    <a href="/usuarios" class="btn btn-primary">Registre seus usuarios</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection