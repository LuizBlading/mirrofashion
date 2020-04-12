<!doctype html>
<html>

<head>
    <meta charset="utf=8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-flatly.css"> -->
</head>

<body>
    <script type="text/javascript">
        document.querySelector('input[type=email]').oninvalid = function(){
            // remove mensagens de erro antigas
            this.setCustomValidity("");

            // Reexecuta validação
            if(!this.validity.valid){
                // se invalido, coloca a mensagem de erro
                this.setCustomValidity("Email Invalido!");
            }
        };
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                 Mirror Fashion</a>
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="glyphicon glyphicon-align-justify"></span></button>
        </div>
        <!-- Menu sanduiche AQUI -->
        <ul class="nav navbar-nav collapse navbar-collapse"> 
            <li><a href="sobre.php">
                <span class="glyphicon glyphicon-home"></span>  Sobre</a>
            </li>
            <li><a herf="#">
                <span class="glyphicon glyphicon-question-sign"></span>  Ajuda</a>
            </li>
            <li><a href="#">
                <span class="glyphicon glyphicon-list-alt"></span>  Perguntas frequentes</a>
            </li>
            <li><a herf="#">
                <span class="glyphicon glyphicon-bullhorn"></span>  Entre em contato</a>
            </li>
        </ul>
    </nav>

    <style>
        .navbar{
            margin: 0;
        }
        .navbar .glyphicon{
            color: white;
        }
        body { padding-top: 70px; }
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>

            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>

            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <!-- Apenas para centralizar mais ainda o panel -->
                        <div class="panel panel-default">

                            <!-- Outro valores para o panel
                            <div class="panel panel-success">
                            <div class="panel panel-danger">
                                -->

                            <div class="panel-heading">
                                <h2 class="panel-title">Sua compra</h2>
                            </div> <!-- Fim .panel-heading -->

                            <div class="panel-body">
                                <img src="img/produtos/foto<?= $_POST['id'] ?>-<?=$_POST['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">
                                <dl>
                                    <dt>Cor</dt>
                                    <dd><?= $_POST['cor'] ?></dd>

                                    <dt>Tamanho</dt>
                                    <dd><?= $_POST['tamanho'] ?></dd>

                                    <dt>Produto</dt>
                                    <dd><?= $_POST['nome'] ?></dd>

                                    <dt>Preço</dt>
                                    <dd><?= $_POST['preco'] ?></dd>
                                </dl>
                            </div> <!-- Fim .panel-body -->
                        </div> <!-- Fim .panel (default) -->
                    </div>

                    <form class="col-sm-8">
                            <div class="row">
                                <fieldset class="col-md-6">
                                    <legend>Dados pessoais</legend>

                                    <div class="form-group">
                                        <label for="nome">Nome completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" >

                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" value="sim" name="spam" checked>
                                                Quero receber spam da Mirror Fashion
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="col-md-6">
                                    <legend>Cartão de crédito</legend>

                                    <div class="form-group">
                                        <label for="numero-cartao">Número - CVV</label>
                                        <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                                    </div>

                                    <div class="form-group">
                                        <label for="bandeira-cartao">Bandeira</label>
                                        <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                            <option value="master">MasterCard</option>
                                            <option value="visa">VISA</option>
                                            <option value="amex">American Express</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="validade-cartao">Validade</label>
                                        <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                    </div>
                                </fieldset>
                            </div>
                        <button type="submit" class="btn btn-primary btn-lg pull-right">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Cofirmar pedido
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicinando arquivo do Bootstrap e JQuery para fazer o botão do
    MENU funcionar ao clicar -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>