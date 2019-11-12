<!doctype html>
<html>

<head>
    <meta charset="utf=8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>

            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>

            <div class="container">
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
                        <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
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

                <form>
                    <fieldset>
                        <legend>Dados pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf">
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>

                    <fiieldset>
                        <legend>Cartão de crédito</legend>
                    </fiieldset>

                    <button type="submit" class="btn btn-primary">
                        Cofirmar pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>