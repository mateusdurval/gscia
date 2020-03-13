<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="row container center">
            <div class="col s11">
            <h3>Lista de Usuários</h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Sobrenome:</th>
                            <th>Nascimento:</th>
                            <th>CPF:</th>
                            <th>RG:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mateus</td>
                            <td>Durval</td>
                            <td>05/03/2000</td>
                            <td>863.243.164.04</td>
                            <td>20.168.116-59</td>
                            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                            <td><a href="" class="btn-floating"><i class="material-icons">edit</i></a></td>
                        </tr>
                        <tr>
                            <td>Mateus</td>
                            <td>Durval</td>
                            <td>05/03/2000</td>
                            <td>863.243.164.04</td>
                            <td>20.168.116-59</td>
                            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                            <td><a href="" class="btn-floating"><i class="material-icons">edit</i></a></td>
                        </tr>
                        <tr>
                            <td>Mateuss</td>
                            <td>Durval</td>
                            <td>05/03/2000</td>
                            <td>863.243.164.04</td>
                            <td>20.168.116-59</td>
                            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                            <td><a href="" class="btn-floating"><i class="material-icons">edit</i></a></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <a href="/cadastrar" class="btn green">Cadastrar</a>
            </div>
        </div>
    </body>
</html>
