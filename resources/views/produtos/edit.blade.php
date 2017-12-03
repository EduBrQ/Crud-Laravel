@extends('template.template')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edição de produtos</h4>
                </div>
                <div class="content">
                    {{ Form::model($produtos, array('route' => array('produtos.update', $produtos->id),
                     'method' => 'PUT',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" value="{{ $produtos->nome }}" class="form-control" placeholder="Nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Referência</label>
                                    <input type="text" name="referencia" value="{{ $produtos->referencia }}" class="form-control" placeholder="Referência">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Valor</label>
                                    <input type="text" name="valor" value="{{ $produtos->valor }}" class="form-control" placeholder="Valor">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                        <div class="clearfix"></div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection