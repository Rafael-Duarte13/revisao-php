<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/BancoDB.class.php';

$cliente = new Cliente();
$cliente->setNome('');
$cliente->setCpf('');

$contaCorrente = new ContaCorrente();
$contaCorrente->setCliente($cliente);
$contaCorrente->setAgencia('');
$contaCorrente->setNumero('');
$contaCorrente->setSaldo('');
if (isset($_GET['conta']) && !empty($_GET['conta'])) {
    $banco = new BancoDB();
    $contaCorrente = $banco->obterContaPeloNumero($_GET['conta']);
    $banco->apagarContaNumero($_GET['conta']);
}

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Banco Senac</title>
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
        <div class="row" style="margin-top: 50px;">
            <!-- Aqui fica o formulário -->
            <div class="col-4">
                <form action="cadastrar-conta.php" method="post">
                    <fieldset class="form-group">
                        <legend>Dados da Conta</legend>
                        <div class="form-group">
                            <label for="agencia">Agencia</label>
                            <input class="form-control" type="text" name="agencia" id="agencia" value="<?=$contaCorrente->getAgencia()?>" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="conta">Conta</label>
                            <input class="form-control" type="text" name="conta" id="conta" value="<?=$contaCorrente->getNumero()?>">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Saldo</label>
                            <input class="form-control" type="text" name="saldo" id="saldo" value="<?=$contaCorrente->getSaldo()?>">
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <legend>Dados do CLiente</legend>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome" value="<?=$contaCorrente->getCliente()->getNome()?>">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input class="form-control" type="text" name="cpf" id="cpf" value="<?=$contaCorrente->getCliente()->getCpf()?>">
                        </div>
                    </fieldset>
                    <div class="form-row">
                        <div class="col-6">
                            <button class="btn btn-success" type="submit">Salvar</button>
                        </div>
                    </div>
                </form>
                </div>
                <!-- Aqui fica a tabela -->
                <div class="col-8">
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
                                    </tr>
                            <?php } ?>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>