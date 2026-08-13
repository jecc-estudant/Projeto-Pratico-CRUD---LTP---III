<?php
require_once '../dao/ComputadorDAO.php';
require_once '../models/Computador.php';

$dao = new ComputadorDAO();
$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: index.php");
    exit;
}

$dados_atuais = $dao->readOne($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $computador = new Computador();
    $computador->setId($id);
    $computador->setMarca($_POST['marca']);
    $computador->setModeloCpu($_POST['modelo_cpu']);
    $computador->setModeloRam($_POST['modelo_ram']);
    $computador->setModeloGabinete($_POST['modelo_gabinete']);
    $computador->setModeloMonitor($_POST['modelo_monitor']);

    if ($dao->update($computador)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar a máquina.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Máquina - IFTO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container form-container">
        <h2>Editar Máquina</h2>
        <form method="POST">
            <label>Marca:</label>
            <input type="text" name="marca" value="<?= htmlspecialchars($dados_atuais['marca']) ?>" required>
            
            <label>Modelo da CPU:</label>
            <input type="text" name="modelo_cpu" value="<?= htmlspecialchars($dados_atuais['modelo_cpu']) ?>" required>
            
            <label>Modelo da RAM:</label>
            <input type="text" name="modelo_ram" value="<?= htmlspecialchars($dados_atuais['modelo_ram']) ?>" required>
            
            <label>Modelo do Gabinete:</label>
            <input type="text" name="modelo_gabinete" value="<?= htmlspecialchars($dados_atuais['modelo_gabinete']) ?>" required>
            
            <label>Modelo do Monitor:</label>
            <input type="text" name="modelo_monitor" value="<?= htmlspecialchars($dados_atuais['modelo_monitor']) ?>" required>
            
            <button type="submit" class="btn btn-edit">Atualizar</button>
            <a href="index.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>