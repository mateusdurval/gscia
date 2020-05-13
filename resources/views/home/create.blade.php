<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastrar Usuário</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Icon -->
        <link href="{{URL::asset('img/logo_gscia.png')}}" rel="shortcut icon">

        <!-- Bootstrap and Style.css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <!-- Plugin jQuery Mask Plugin -->
        <script src="{{URL::asset('mask/src/jquery.mask.js')}}"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f8b439a839.js" crossorigin="anonymous"></script>

        <!-- Masks -->
        <script>
            $(document).ready(function(){
                $('#cpf').mask('000.000.000-00');
                $('#rg').mask('00.000.000-00');
                $('#cep').mask('00000-000');
            });
        </script>
    </head>
    <body>
        <!-- Nav Principal -->
        <nav class="navbar navbar-expand-lg" id="background-nav">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link espacamento-nav" href="/">Painel <i class="fas fa-home"></i></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cadastrar Usuário</a>
                            <a class="dropdown-item" href="#">Editar Usuário</a>
                            <a class="dropdown-item" href="#">Remover Usuário</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Utilitários</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuários</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::asset('img/profiles/mateus.jpg')}}" class="rounded-circle" width="35" height="35"> Mateus Durval</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="#">Editar Perfil</a>
                            <a class="dropdown-item" href="#">Configurações</a>
                            <a class="dropdown-item" href="#">Administradores</a>
                        </div>
                    </li>   

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-top: 6%">Sair <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
        </nav>
        <!-- Título "Cadastrar Usuário" -->
       <div class="container" style="margin-top: 1%;">
            <h1>Cadastrar Usuário</h1>
       </div>

       <!-- Breadcrumb -->
       <div class="container" style="margin-top: 1%;">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="/" style="color: rgba(0,0,0,0.8);">Painel</a></li>
                    <li class="breadcrumb-item active">Cadastrar</li>
                </ol>
            </div>
        </div>
        
        <div class="container">
            <div class="col-md-12">
                <form action="/home/store" method="post" enctype="multipart/form-data" id="validate-form">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nome">Nome *</label>
                            <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Ex.: Mateus Durval Ferreira" autocomplete="off" autofocus="">
                        </div>

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="cpf">CPF *</label>
                            <input type="text" class="form-control form-control-sm" name="cpf" id="cpf" placeholder="Ex.: 000.000.000-00" autocomplete="off">
                            <span id="ServerSideCPF"></span>
                        </div>     

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="rg">RG *</label>
                            <input type="text" class="form-control form-control-sm" name="rg" id="rg" placeholder="Ex.: 00.000.000-00" autocomplete="off">
                        </div>                   
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nascimento">Data de Nascimento *</label>
                            <input type="date" class="form-control form-control-sm" name="nascimento" id="nascimento" autocomplete="off">
                        </div>

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="cep">CEP *</label>
                            <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="Ex.: 00000-000" autocomplete="off">
                        </div>

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="logradouro">Logradouro *</label>
                            <input type="text" class="form-control form-control-sm" name="logradouro" id="logradouro" placeholder="Ex.: Rua Alameda do Bosque" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="numero">Número</label>
                            <input type="number" class="form-control form-control-sm" name="numero" id="numero" placeholder="Ex.: 100" autocomplete="off">
                        </div>

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="bairro">Bairro *</label>
                            <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="Ex.: Placaford" autocomplete="off">
                        </div>    

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="estado">UF *</label>
                            <input type="text" class="form-control form-control-sm" name="estado" id="estado" placeholder="Ex.: Bahia" autocomplete="off">
                        </div>                    
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cidade">Cidade *</label>
                            <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="Ex.: Salvador" autocomplete="off">
                            <div class="valid-feedback">
                                Parece bom!
                            </div>
                            <div class="invalid-feedback">
                                Insira uma Cidade válida.
                            </div>
                        </div>  

                        <div class="form-group col-md-3 offset-md-1">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" placeholder="Ex.: Casa 02, 3º Andar" autocomplete="off">
                        </div>                       
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                    <a href="/" class="btn btn-sm btn-dark">Cancelar</a>
                </form>
            </div>
        </div>

        <script>
            //$("#cpf").on('change', function(e) {
                //let cpf = $(this).val();
                //$.get('/home/teste/'+cpf, function(message) {
                    //if(message == "not") {
                        //$("#cpf").removeClass("is-valid");
                        //$("#cpf").addClass("is-invalid");
                    //} else {
                        //$("#cpf").removeClass("is-invalid");
                        //$("#cpf").addClass("is-valid");
                    //}
                //});
            //});
        </script>

        <script>
            $("#cep").focusout(function() {
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                    dataType: 'json',
                    success: function(resposta) {
                        $("#logradouro").val(resposta.logradouro);
                        $("#complemento").val(resposta.complemento);
                        $("#bairro").val(resposta.bairro);
                        $("#estado").val(resposta.uf);
                        $("#cidade").val(resposta.localidade);
                        $("#complemento").val(resposta.complemento);
                    }
                });
            });
        </script>
    </body>
</html>