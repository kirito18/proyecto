
@extends('admin.template.main')

@section('title','Docentes')
@section('content')
@section('title1','Creacion usuario'.$user->name)


@if(Session::has('flash_message'))

    <div>
        {{Session::get('flash_message')}}

    </div>
@endif

{{--coloca la ruta entre [] para pasar $user--}}
{!!  Form::open(['route'=>['admin.users.update',$user->id],'method'=>'PUT'])!!}



<div class="form-group">
    {{--seccion pendiente aun--}}
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Correo Electronico') !!}
    {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'ejemplo@gmail.com','required']) !!}
</div>



<div class="form-group">
    {!! Form::label('type','Tipo Usuario') !!}
    {{--defino member en tercer parametro para crear docentes por defecto--}}
    {!! Form::select('type',['standard'=>'Docente','admin'=>'Administrador'],'standard',['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('EDITAR',['class'=>'btn btn-primary']) !!}
</div>


{!!  Form::close()!!}
@endsection
