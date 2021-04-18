<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #2E2532;
            height: 100vh;
        }

        #dashboard-column {
            display: flex;
            height: 15vh;
            background-color: #f9f9f9;
            align-items: center;
            flex-direction: column;
        }
        
    </style>
</head>
<body>
    <div id="dashboard">
        <h3 class="text-center text-white pt-5">Atividade PHP</h3>
        <div class="container">
            <div id="dashboard-row" class="row justify-content-center align-items-center">
                <div id="dashboard-column" class="col-md-6">
                    <h3 class="text-center p-3">Login</h3>
                    <div id="box" class="col-md-12">
                        <!-- MENSAGEM DE SUCESSO [INICIO] * Só exibir se tiver falhado no dashboard -->
                            <p name="sucesso" class="alert alert-success">Logado com sucesso!</p>
                        <!-- MENSAGEM DE SUCESSO [FIM] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>