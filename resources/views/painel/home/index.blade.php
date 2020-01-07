@extends('painel.templates.template')

@section('content')
<div class="relatorios">
    <div class="container">
        <ul class="relatorios">
            <li class="col-md-6 text-center">
                <a href="painel/posts">
                    <img src="{{url("assets/painel/imgs/noticias-acl.png")}}" alt="posts" class="img-menu">
                    <h1>{{$totPosts}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="painel/roles">
                    <img src="{{url("assets/painel/imgs/funcao-acl.png")}}" alt="roles" class="img-menu">
                    <h1>{{$totRoles}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="painel/permissions">
                    <img src="{{url("assets/painel/imgs/permissao-acl.png")}}" alt="permissions" class="img-menu">
                    <h1>{{$totPermissions}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="painel/users">
                    <img src="{{url("assets/painel/imgs/perfil-acl.png")}}" alt="usuarios" class="img-menu">
                    <h1>{{$totUsers}}</h1>
                </a>
            </li>
        </ul>
    </div>
</div><!--Relatorios-->
@endsection