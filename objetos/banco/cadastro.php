<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/BancoDB.class.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        td, th {
            padding-right: 32px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="cadastrar-conta.php" method="post">
        <fieldset class="form-group">
            <legend>Dados da Conta</legend>
            <div class="form-group row">
                <label for="agencia" class="col-sm-1 col-form-label">Agencia</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="agencia" id="agencia">
                </div>
            </div>
            <div class="form-group row">
                <label for="conta" class="col-sm-1 col-form-label">Conta</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="conta" id="conta">
                </div>
            </div>
            <div class="form-group row">
                <label for="saldo" class="col-sm-1 col-form-label">Saldo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="saldo" id="saldo">
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Dados do CLiente</legend>
            <div class="form-group row">
                <label for="nome" class="col-sm-1 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="cpf" class="col-sm-1 col-form-label">CPF</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="cpf" id="cpf">
                </div>
            </div>
        </fieldset>
        <button class="btn btn-success" type="submit">Cadastrar</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
    </form>
    <br>
    <table class="table table-hover">
        <?php
            $banco = new BancoDB();
            $contas = $banco->listaTodas();
        ?>
        <tr>
            <th>Agencia</th>
            <th>Conta</th>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Saldo</th>
        </tr>
        <?php foreach ($contas as $conta) { ?>
            <tr>
                <td><?=$conta->getAgencia();?></td>
                <td><?=$conta->getNumero();?></td>
                <td><?=$conta->getCliente()->getNome();?></td>
                <td><?=$conta->getCliente()->getCpf();?></td>
                <td><?=$conta->getSaldo();?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>