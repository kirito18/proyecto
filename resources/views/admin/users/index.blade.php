@extends('admin.template.main')
@section('title','listado')
@section('title1','Lista de Accesos')

@section('content')



    @if(Session::has('flash_message'))

        <div class="alert alert-danger">{{Session::get('flash_message')}}

        </div>
    @endif


    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#">Lista Usuarios</a></li>
        

    </ul>
   <table class="table table-hover">
       <thead>
       {{--fin nav bar de crud--}}

       {{--fin nav crud--}}





       <th>ID</th>
       <th>NOMBRE</th>
       <th>EMAIL</th>

       <th>TIPO</th>
       <th>FECHA CREACION USUARIO</th>
       <th>FECHA MODIFICACION USUARIO</th>
       <th>MANTENIMIENTO</th>

       </thead>
       <tbody>
       @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                {{--TIPO DE USUARIO--}}
                @if($user->type =="admin")
                    <span class="label label-warning">{{$user->type}}</span>
                    @else
                    <span class="label label-success">{{$user->type}}</span>
                    @endif
                {{--END TIPO USUARIO--}}
                </td>

                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>

                {{--ruta para eliminar--}}
                <td >

                    <a href="{{route('admin.users.destroy', $user->id)}}"  class="btn btn-danger btn-xs"
                       
                       onclick="return confirm('¿ Estas seguro que desea eliminar este usuario ?')">ELIMINAR</a>

                    <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning btn-xs">ACTUALIZAR</a>
                </td>
            </tr>
           @endforeach

       </tbody>

   </table>
    {{--paginando--}}

    {!! $users->render() !!}

{{--requiere singlepagination en userscontroller para cambiar modelo
   {!! $users->appends(['sort' => 'votes'])->links() !!}
   {!! $users->fragment('foo')->links() !!}
--}}
@endsection