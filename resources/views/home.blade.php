@extends('layouts.app')

@section('content')

<div class="bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card=text">
                        Aqui você pode cadastrar produtos no site.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Verificar distribuição dos produtos</h5>
                    <p class="card=text">
                        Aqui você pode verificar a distribuição dos produtos aos usuários 
                    </p>
                    <a href="/dd" class="btn btn-primary">Verificar distribuição</a>
                </div>
            </div>  
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Usuários</h5>
                    <p class="card=text">
                        Aqui você pode cadastrar usuários no site. 
                    </p>
                    <a href="/usuarios" class="btn btn-primary">Cadastre seus usuários</a>
                </div>
            </div>            
        </div>
    </div>

</div>
@endsection