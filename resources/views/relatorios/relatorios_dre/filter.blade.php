@extends('template.template')
@section('content')
    <!-- Page header -->
    @include('shared.header', $paramns = [
        'nome' => 'Filtros de Relatórios de Dre',
        'breadcrum' => [
            [
                'nome' => 'Filtros de Relatórios de Dre',
                'url'  => ''
            ]
            ]
     ])

    <!-- Conteúdo -->

    <div class="panel panel-flat">
        <div class="panel-body">
            <legend class="text-bold">Preencha os campos abaixo</legend>
            {{ Form::open(array('url' => '/relatorios/relatorios_dre/visualizar','class'=>'form-horizontal','method' => 'get')) }}
            <div class="form-group row">
                <div class="col-lg-4">

                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-4">
                    <label class="control-label col-lg-9">Data de Cadastro Inicial</label>

                    {!! Form::input('text','data_nascimento[date][]',null,
                    ['class'=>'form-control date','placeholder'=>'Data Cadastro Inicial']) !!}

                </div>
                <div class="col-lg-4">
                    <label class="control-label col-lg-9">Data de Cadastro Final</label>

                    {!! Form::input('text','data_nascimento[date][]',null,
                    ['class'=>'form-control date','placeholder'=>'Data Cadastro Final']) !!}
                </div>
            </div>

            <button class="btn btn-info alpaca-float-right">Consultar</button>
            {{ Form::close()}}
        </div>
    </div>



@endsection

