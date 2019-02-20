<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>listarPaciente</title>
    <link rel="icon" href="../img/ico.png" type="image/gif">
    <link rel="stylesheet" href="./bundle/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <header>
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #339966; color:white; height: 50px;" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color: white; font-size: 20px; font-family: Times New Roman;"> Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/SisSaude/public/funcionario" style="color:white; font-size: 20px; font-family: Times New Roman; ">Funcionário</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-danger btn-lg active" role="button" aria-pressed="true"href="../../login.html" style="">Sair</a>
        </form>
    </div>
</nav>
</header>

</br>
<div class="container">

 <h1 style="font-size: 20px; font-family: Arial;">Pacientes</h1>
</br>

<div id="paciente"></div>

<div id="list" class="row">

    <div class="table-responsive col-md-12">

        <table class="table table-striped" cellspacing="0" cellpadding="0">

            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Curso</th>
                    <th>Sexo</th>
                    <th>Tipo</th>
                    <th class="actions"></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $p)

                <tr>
                    <td> <a href="{{ route('paciente.show', $p->id) }}">{{$p->matricula }}</a></td>
                    <td>{{$p->nome}} </a></td>
                    <td>{{$p->email}} </a></td>
                    <td>{{$p->telefone}} </a></td>
                    <td>{{$p->curso}} </a></td>
                    <td>{{$p->sexo}} </a></td>
                    <td>{{$p->tipo}} </a></td>
                    <td class="actions">
                        <a class="btn btn-warning btn-xs" href="paciente/{{$p->id}}/edit">Editar</a>
                        
                    </td>
                    
                    <td>
                        <form action="{{ route('paciente.destroy', $p->id) }}" method="post">
                            @csrf{{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
            
        </table>


    </div>
</div> <!-- /#list -->
<br>
<div id="actions" class="row">
    <div class="col-md-12">
      <button id='btn-cadastrar-paciente'  type="submit" class="btn btn-success mr-sm-2"><a style="text-decoration: white;" href="{{route('paciente.create') }}">Adicionar</a></button>
      <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->
      <br>
      <br>
  </div>
</div>



    <!--<table class="table table-striped">
    <tr>
      <th scope="col"> Matricula </th>
      <th scope="col"> Nome </th>
      <th scope="col"> E-mail </th>
      <th scope="col"> Telefone </th>
      <th scope="col"> Curso </th>
      <th scope="col"> Sexo </th>
      <th scope="col"> Tipo</th>
      <th scope="col">    </th>
      <th scope="col">    </th>
    </tr>
    </tr>

    @foreach($pacientes as $p)
        <tr>
            <td> <a href="{{ route('paciente.show', $p->id) }}"> {{$p->matricula }} </a> </td>
            <td>{{$p->nome}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->telefone}}</td>
            <td>{{$p->curso}}</td>
            <td>{{$p->sexo}}</td>
            <td>{{$p->tipo}}</td>
            <td></td>
            <td> <a href="paciente/{{$p->id}}/edit">
                <button type="button" class="btn btn-info" href="paciente/{{$p->id}}/edit">Editar</button></a> </td>
            <td>
                <form action="{{ route('paciente.destroy', $p->id) }}" method="post">
                    @csrf{{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>-->

<!--<a href="{{ route('paciente.create') }}">
    <button type="button" class="btn btn-light">Novo</button>
</a>-->



</div>


<footer style="background-color: #339966;">

</footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/relestoqueController.bundle.js"></script>

</body>

</html>