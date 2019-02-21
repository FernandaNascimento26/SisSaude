<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>listarAcompanhamentos</title>
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

    <h1 style="font-size: 20px; font-family: Arial;">Acompanhamentos</h1>
</br>

<div id="acompanhamento"></div>


<div id="list" class="row">
   
    <div class="table-responsive col-md-12">
     
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Procedimento</th>
                    <th>Observacoes/th>
                    <th>Próxima Sessão</th>
                    <th class="actions"></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
             @foreach($acompanhamentos as $ap)
             <tr>
                <td> <a href="{{ route('acompanhamentopsicologico.show', $ap->id) }}"> {{$ap->data}} </a> </td>
                <td> {{$ap->procedimento}}</td>
                <td>{{$ap->Observacoes}}</td>
                <td> {{$ap->proxima_sessao}}</td>
                <td><a class="btn btn-warning btn-xs" href="acompanhamentopsicologico/{{$ap->id}}/edit">Editar</a>   
                </td>
                <td><form action="{{ route('acompanhamentopsicologico.destroy',$ap->id) }}" method="post">
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


<a href="{{ route('acompanhamentopsicologico.create') }}">Novo</a>


<footer style="background-color: #339966;">

</footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/relestoqueController.bundle.js"></script>

</body>

</html>