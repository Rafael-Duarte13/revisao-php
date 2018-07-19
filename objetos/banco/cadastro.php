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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        td, th {
            padding-right: 32px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-8">
        <form action="cadastrar-conta.php" method="post">
            <fieldset class="form-group">
                <legend>Dados da Conta</legend>
                <div class="form-group row">
                    <label for="agencia" class="col-sm-1 col-form-label">Agencia</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="agencia" id="agencia" autofocus>
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
            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i></button>
            <button class="btn btn-danger" type="reset"><i class="fas fa-sync-alt"></i></button>
            </form>
        </div>
        <br>
        <div class="col-4">
            <fieldset>
                <legend>Lista de Contas</legend>
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
                            <td>
                                <form action="editar-conta.php" method="post">
                                    <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action="apagar-conta.php" method="post">
                                    <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                                    <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </fieldset>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>