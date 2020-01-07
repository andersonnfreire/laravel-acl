<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$titulo or 'Painel ACL - Curso de Laravel'}}</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css')}}" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!--Fonts-->
        <!--        <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}">-->
        <script src="{{URL::asset('https://kit.fontawesome.com/4560af3fc1.js')}}" crossorigin="anonymous"></script>
        <!--CSS-->
        <!--<link href="{{URL::asset('assets/painel/css/acl-painel.css')}}" rel="stylesheet" type="text/css">-->
        <link href="{{URL::asset('assets/all/acl-painel.css')}}" rel="stylesheet" type="text/css">
        <!--Favicon-->
        <link rel="icon" type="image/png" href="{{url('assets/painel/imgs/favicon-acl.png')}}">
    </head>
    <body>
        <div class="menu">
            <ul class="menu col-md-12">
                <li class="col-md-2 text-center">
                    <a href="/painel">
                        <img src="{{url('assets/painel/imgs/acl-branca.png')}}" alt="acl" class="logo">
                    </a>
                </li>
                @can('user')
                <li class="col-md-2 text-center">
                    <a href="{{url('/painel/users') }}">
                        <img src="{{url('assets/painel/imgs/perfil-acl.png')}}" alt="usuarios" class="img-menu">
                        <h1>Usuários</h1>
                    </a>
                </li>
                @else
                <li class="col-md-2 text-center">
                    <img src="{{url('assets/painel/imgs/perfil-acl.png')}}" alt="usuarios" class="img-menu">
                    <h1>Not Permission</h1>
                </li>
                @endcan
                @can('view_post')
                <li class="col-md-2 text-center">
                    <a href="{{url('/painel/posts') }}">
                        <img src="{{url('assets/painel/imgs/noticias-acl.png')}}" alt="posts" class="img-menu">
                        <h1>Posts</h1>
                    </a>
                </li>
                @else
                <li class="col-md-2 text-center">
                    <img src="{{url('assets/painel/imgs/noticias-acl.png')}}" alt="posts" class="img-menu">
                    <h1>Not Permission</h1>
                </li>
                @endcan
                @can('adm')
                <li class="col-md-2 text-center">
                    <a href="{{url('/painel/roles') }}">
                        <img src="{{url('assets/painel/imgs/funcao-acl.png')}}" alt="roles" class="img-menu">
                        <h1>Roles</h1>
                    </a>
                </li>
                @else
                <li class="col-md-2 text-center">
                    <img src="{{url('assets/painel/imgs/funcao-acl.png')}}" alt="roles" class="img-menu">
                    <h1>Not Permission</h1>
                </li>
                @endcan
                
                @can('adm')
                <li class="col-md-2 text-center">
                    <a href="{{url('/painel/permissions') }}">
                        <img src="{{url('assets/painel/imgs/permissao-acl.png')}}" alt="permissions" class="img-menu">
                        <h1>Permissões</h1>
                    </a>
                </li>
                @else
                <li class="col-md-2 text-center">
                        <img src="{{url('assets/painel/imgs/permissao-acl.png')}}" alt="permissions" class="img-menu">
                        <h1>Not Permission</h1>
                </li>
                @endcan
                <li class="col-md-2 text-center">
                    <a href="{{url('logout')}}">
                        <img src="{{url('assets/painel/imgs/sair-acl.png')}}" alt="Sair" class="img-menu">
                        <h1>Sair</h1>
                    </a>
                </li>
            </ul>
        </div><!--Menu-->


        @yield('content')
        <div class="footer actions">
            <div class="container text-center">
                <p class="footer">EspecializaTi - Todos os direitos reservados</p>
            </div>
        </div>


        <!--jQuery-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>