<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>listarFuncionario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
                    <a class="nav-link" href="http://localhost/SisSaude/public/paciente" style="color:white; font-size: 20px; font-family: Times New Roman;">Paciente</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-danger btn-lg active" role="button" aria-pressed="true"href="../../login.html" style="">Sair</a>
            </form>
        </div>
    </nav>
</header>


</br>
</br>


<div class="container">

    <h1 style="font-size: 20px; font-family: Arial;">Prontuario Psicologico</h1>
</br>

<div id="funcionario"></div>


<div id="list" class="row">
   
    <div class="table-responsive col-md-12">
     
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          
            <thead>
                <tr>
                    <th>Encaminhamento</th>
                    <th>Situacao Escolar</th>
                    <th>Atividade Profissional</th>
                    <th>Motivo da Consulta</th>
                    <th class="actions"></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
             @foreach($prontuarios as $pp)
             <tr>
                <td> <a href="{{ route('prontuariopsicologico.show', $pp->id) }}"> {{$pp->encaminhamento}} </a> </td>
                <td> {{$pp->situacao_escolar}}</td>
                <td>{{$pp->atividade_profissional}}</td>
                <td> {{$pp->motivo_consulta}}</td>
                <td><a class="btn btn-warning btn-xs" href="prontuariopsicologico/{{$pp->id}}/edit">Editar</a>   
                </td>
                <td><form action="{{ route('prontuariopsicologico.destroy',$pp->id) }}" method="post">
                    @csrf {{ csrf_field() }} 
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </tr>
            
            @endforeach
        </tbody>
        
    </table>
    
    
</div>
</div> <!-- /#list -->


<a href="{{ route('prontuariopsicologico.create') }}">Novo</a>


<footer style="background-color: #339966;">

</footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/relestoqueController.bundle.js"></script>

</body>

</html>