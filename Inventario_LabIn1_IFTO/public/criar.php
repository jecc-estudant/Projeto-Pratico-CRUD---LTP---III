<?php
require_once '../dao/ComputadorDAO.php';
require_once '../models/Computador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $computador = new Computador();
    $computador->setMarca($_POST['marca']);
    $computador->setModeloCpu($_POST['modelo_cpu']);
    $computador->setModeloRam($_POST['modelo_ram']);
    $computador->setModeloGabinete($_POST['modelo_gabinete']);
    $computador->setModeloMonitor($_POST['modelo_monitor']);

    $dao = new ComputadorDAO();
    if ($dao->create($computador)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao cadastrar a máquina.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Máquina - IFTO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container form-container">
        <h2>Cadastrar Nova Máquina</h2>
        <form method="POST">
            <label>Marca:</label>
            <input type="text" name="marca" required>
            
            <label>Modelo da CPU:</label>
            <input type="text" name="modelo_cpu" required>
            
            <label>Modelo da RAM:</label>
            <input type="text" name="modelo_ram" required>
            
            <label>Modelo do Gabinete:</label>
            <input type="text" name="modelo_gabinete" required>
            
            <label>Modelo do Monitor:</label>
            <input type="text" name="modelo_monitor" required>
            
            <button type="submit" class="btn btn-add">Salvar</button>
            <a href="index.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>