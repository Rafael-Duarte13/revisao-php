<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        div {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php
        require_once 'Lampada.php';
        $lampada = new Lampada('img/lampada_apagada.jpg', 'img/lampada_acesa.jpg');
        if (isset($_POST['desligar'])) {
            $lampada->desliga();
        } else {
            $lampada->liga();
        }
        ?>
        <img src="<?=$lampada->getImagem()?>">
        <form method="post">
            <button type="submit" name="ligar">Ligar</button>
            <button type="submit" name="desligar">Desligar</button>
        </form>
    </div>
</body>
</html>