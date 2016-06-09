<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default') - Panel Admin</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
@include('admin.template.nav.navbar')


<div class="container-fluid">



    <div class="panel panel-primary">

        <div class="panel-heading">

            <h3 class="panel-title">@yield('title1','default')</h3>
        </div>

        <div class="panel-body">
            {{--@include('flash::message') --> incluye el mensaje confirmacion--}}
            @include('flash::message')

            @yield('content')

        </div>

    </div>

</div>
<script src="{{asset('plugins/jquery/js/jquery-2.2.4.js')}}" ></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
</body>
</html>