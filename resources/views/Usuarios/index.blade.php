@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}" title="Voltar"> <i
                    class="fas fa-backward "></i> </a>
                <a class="btn btn-success" href="{{ route('usuarios.create') }}" title="Criar usuario"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Data de criação</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($usuarios as $usuarios)
            <tr>
                <td>{{ $usuarios->id }}</td>
                <td>{{ $usuarios->nome }}</td>
                <td>{{ $usuarios->apelido }}</td>
                <td>{{ $usuarios->idade }}</td>     
                <td>{{ $usuarios->telefone }}</td>               
                <td>{{ $usuarios->cpf }}</td>   
                <td>{{ date_format($usuarios->created_at, 'd/m/Y') }}</td>
                <td>
                    <form action="{{ route('usuarios.destroy', $usuarios) }}" method="POST">

                        <a href="{{ route('usuarios.show', $usuarios) }}" title="show"><i class="fas fa-eye text-success  fa-lg"></i></a>

                        <a href="{{ route('usuarios.edit', $usuarios) }}"><i class="fas fa-edit  fa-lg"></i></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;" onclick="confirmExclusao()"> <i class="fas fa-trash fa-lg text-danger"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

<script>
    function confirmExclusao() {
       if (confirm("Tem certeza que deseja excluir esse produto?")) {
          location.href="deletar_categoria.jsp?acao=deletar";
       }
    }
    </script>