
@extends('admin.template.main')

@section('title','Docentes')
@section('content')
@section('title1','Creacion usuario')

{{--validacion campos de userRequest--}}
    @if(count($errors )>0)

    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>

            @endif
{{--validacion campos de userRequest--}}
{!!  Form::open(['route'=>'admin.users.store','method'=>'POST'])!!}



            <div class="form-group">
                {{--seccion pendiente aun--}}
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Correo Electronico') !!}
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@gmail.com','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'**************','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('type','Tipo Usuario') !!}
                {{--defino member en tercer parametro para crear docentes por defecto--}}
                {!! Form::select('type',['standard'=>'Docente','admin'=>'Administrador'],'standard',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('GUARDAR',['class'=>'btn btn-primary']) !!}
            </div>


    {!!  Form::close()!!}
@if(Session::has('flash_message'))

    <div>
        {{Session::get('flash_message')}}

    </div>
@endif
    @endsection
