@extends('template.template')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edição de titulos</h4>
                </div>
                <div class="content">
                    {{ Form::model($titulos, array('route' => array('titulos.update', $titulos->id),
                     'method' => 'PUT',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" value="{{ $titulos->nome }}" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Editora</label>
                                <input type="text" name="editora" value="{{ $titulos->editora }}" class="form-control" placeholder="Editora">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Valor</label>
                                <input type="text" name="valor" value="{{ $titulos->valor }}" class="form-control" placeholder="Valor">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Data de Lançamento</label>
                                <input type="text" name="data_lancamento" value="{{ $titulos->data_lancamento }}" class="form-control" placeholder="Data de Lançamento">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" name="autor" value="{{ $titulos->autor }}"class="form-control" placeholder="Autor">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id_colecao" value="{{ $titulos->id_colecao }}">
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                        <div class="clearfix"></div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection