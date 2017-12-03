@extends('template.template')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Cadastro de coleções de {{ Auth::user()->name}}</h4>
                </div>
                <div class="content">
                    {{ Form::open(array('url' => '/colecoes',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Edição</label>
                                <input type="text" name="n_edicao" class="form-control" placeholder="Edição">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Editora</label>
                                <input type="text" name="editora" class="form-control" placeholder="Editora">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar Coleção</button>
                    <div class="clearfix"></div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection