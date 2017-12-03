@extends('template.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Cadastro de Emprestimos</h4>
                </div>
                <div class="content">

                    {{ Form::open(array('url' => '/emprestimos',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Amigos</label>
                                <select name="id_amigo" class="form-control">
                                    <option value="">** Escolha o Amigo **</option>
                                    @foreach($amigos as $amigo)
                                        <option value="{{ $amigo->id }}">{{ $amigo->apelido }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Títulos</label>
                                <select name="id_titulo" class="form-control">
                                    <option value="">** Escolha o Título **</option>
                                    @foreach($titulos as $titulo)
                                        <option value="{{ $titulo->id }}">{{ $titulo->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Data do empéstimo</label>
                                <input type="text" name="data_emprestimo" value="2017-10-09" class="form-control"
                                       placeholder="Data do empéstimo">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Data de entrega</label>
                                <input type="text" name="data_entrega" value="2017-10-15" class="form-control"
                                       placeholder="Data de entrega">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Observacao</label>
                                <textarea name="observacao" cols="10" rows="5" class="form-control"
                                          placeholder="Observacao"></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-info btn-fill pull-right">Emprestar</button>
                    <div class="clearfix"></div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection