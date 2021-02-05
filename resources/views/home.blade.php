@extends('layouts.app')

@section('content')

<div class="bg-light border border-secondary">
    <div class="col-md-4 bloco famarelo ct">
        <a href="/produtos">
            <div class="conteudo">
                <h4>Cadastro de Produtos</h4>
                <p>
                    Aqui você pode cadastrar produtos no site.
                </p>                
            </div>
        </a>
    </div>
    <div class="col-md-4 bloco fverde ct">
        <a href="/distribuicao">
            <div class="conteudo">
                <h4>Distribuição de produtos</h4>
                <p>
                    Aqui você pode verificar a distribuição dos produtos aos usuários 
                </p>
            </div>
        </a>
    </div>   
    <div class="col-md-4 bloco flaranja ct">
        <a href="/usuarios">
            <div class="conteudo">
                <h4>Cadastro de Usuários</h4>
                <p>
                    Aqui você pode cadastrar usuários no site. 
                </p>
            </div>
        </a>
    </div>
</div>

<footer class="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    Todos os direitos reservados. André Luiz© 2021
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection