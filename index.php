<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Link -->
    <title>Calculadora - IMC</title>
</head>
<body>
    <nav class="navbar navbar-success bg-success">
    </nav>
    <hr>
    <main>
        <div class="container">
        <div class="row" class="d-flex justify-content-center">
                <h2 style="text-align: center;" class="text-success">Calculadora - IMC</h2>
            </div>
            <div style="position: relative;">
            <div class="container">
            <table class="table align-middle mb-0 bg-white">
                <thead>
                <tr class="table-success">
                <td>IMC</td>
                <td>Classificação</td>
                <td>Obesidade(Grau)</td>
                </tr>
                </thead>

            <tbody>
                <tr id="magreza">
                    <td>MENOR QUE 18,5</td>
                    <td>MAGREZA</td>
                    <td>0</td>
                </tr>
                <tr id="normal">
                    <td>ENTRE 18,5 E 24,9</td>
                    <td>NORMAL</td>
                    <td>0</td>
                </tr>
                <tr id="sobrepeso">
                    <td>ENTRE 25,0 E 29,9</td>
                    <td>SOBREPESO</td>
                    <td>|</td>
                </tr>
                <tr id="obesidade">
                    <td>ENTRE 30,0 E 39,9</td>
                    <td>OBESIDADE</td>
                    <td>||</td>
                </tr>
                <tr id="obesidadeGrave">
                    <td>MAIOR QUE 40,0</td>
                    <td>OBESIDADE GRAVE</td>
                    <td>|||</td>
                </tr>

            </tbody>
            <tbody>

            </tbody>
            </table>
            </div>
            <hr>
            <div class="row">
            <div class="col-1"></div>
                <div class="col-md">
                    <div class="form-outline">
                        <input type="number" id="peso" class="form-control form-control-lg" />
                        <label class="form-label" for="peso">Peso</label>
                    </div>
                </div>
                    <div class="col-md">
                    <div class="form-outline">
                        <input type="number" id="altura" class="form-control form-control-lg" />
                        <label class="form-label" for="altura">Altura</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-outline">
                        <input class="form-control form-control-lg" id="campoResultado" type="text" value="" aria-label="readonly input example" readonly/>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-outline">
                        <button type="submit" id="calcular" class="btn btn-success">Calcular</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="controller/imcController.js"></script>
</html>
