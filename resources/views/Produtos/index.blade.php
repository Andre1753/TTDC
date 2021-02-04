@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Data de criação</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produtos as $produtos)
            <tr>
                <td>{{ $produtos->nome }}</td>
                <td>{{ $produtos->descricao }}</td>
                <td>{{ $produtos->quantidade }}</td>               
                <td>{{ date_format($produtos->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('produtos.destroy', $produtos) }}" method="POST">

                        <a href="{{ route('produtos.show', $produtos) }}" title="show">Detalhes</a>

                        <a href="{{ route('produtos.edit', $produtos) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection