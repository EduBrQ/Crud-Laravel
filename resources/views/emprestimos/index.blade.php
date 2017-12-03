@extends('template.template')
@section('content')
    <!-- Page header -->
    <div class="header">
        <div class="heading-elements" style="text-align: right">
            <div class="heading-btn-group">
                <a href="{{ URL::to('/emprestimos/create') }}" class="btn btn-success">
                    <span> Novo Emprestimo</span></a>
            </div>
        </div>

        <div class="panel-heading">
            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Projeto</span> -
                Emprestimos
            </h4>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icon-home2 position-left"></i> Principal</a></li>
            <li class="breadcrumb-item active">Emprestimos</li>
        </ol>

    </div>
    <!-- /page header -->

    <!-- Conteúdo -->

    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Título</th>
                <th>Data de emprestimo</th>
                <th>Data de entrega</th>
                <th>Observação</th>
                <th class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($emprestimos as $chave => $emprestimo)
                <tr>
                    <td>{{ $emprestimo->amigo->nome }}</td>
                    <td>{{ $emprestimo->titulo->nome }}</td>
                    <td>{{ $emprestimo->data_emprestimo }}</td>
                    <td>{{ $emprestimo->data_entrega }}</td>
                    <td>{{ $emprestimo->observacao }}</td>
                    <td class="text-center">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-three-bars color"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('emprestimos/' . $emprestimo->id . '/edit')}}"><i
                                                    class="pe-7s-note"></i>
                                            Editar Emprestimos</a>
                                    </li>
                                    <li>
                                        <a href="{{url('emprestimos/' . $emprestimo ->id . '/delete')}}"><i
                                                    class="pe-7s-trash"></i>
                                            Excluir Emprestimos</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
