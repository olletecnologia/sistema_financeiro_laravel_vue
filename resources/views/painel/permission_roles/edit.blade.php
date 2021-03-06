@extends('template.template')
@section('content')
@section('page_title')
    <div class="col-lg-12">
        <h1 class="page-header">Editar Permission Roles</h1>
    </div>
@endsection
    <h1>Editar: {{ $roles->nome }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::model($roles, array('route' => array('roles.update', $roles->id), 'method' => 'PUT')) }}

    {!! Form::label('user_id','Usuário') !!}
    {!! Form::select('user_id', $unidades,null,['class'=>'form-control','placeholder'=>'*** Selecione o Usuário ***']) !!}
    <br>
    {!! Form::label('permission_id','Permissão') !!}
    {!! Form::select('permission_id', $unidades,null,['class'=>'form-control','placeholder'=>'*** Selecione a Permissão ***']) !!}
    <br>

    {{ Form::submit('Editar Role!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection('content')
