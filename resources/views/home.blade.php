@extends('template.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Status</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está Logado!
                </div>
            </div>
            <div class="col-md-8 col-md-offset-4">
            <a href="{{ URL::to('/servicos') }}" class="btn btn-success">
                <span> Serviços </span></a>

            <a href="{{ URL::to('/produtos') }}" class="btn btn-success">
                <span> Produtos </span></a>
            </div>
        </div>
    </div>
</div>
@endsection
