<?php
require_once '../dao/ComputadorDAO.php';

$dao = new ComputadorDAO();
$stmt = $dao->read();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inventário - IFTO Campus Paraíso do Tocantins</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Inventário de Computadores - LabIn1 - IFTO</h1>
        <a href="criar.php" class="btn btn-add">Cadastrar Novo Computador</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>CPU</th>
                    <th>RAM</th>
                    <th>Gabinete</th>
                    <th>Monitor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['marca']) ?></td>
                    <td><?= htmlspecialchars($row['modelo_cpu']) ?></td>
                    <td><?= htmlspecialchars($row['modelo_ram']) ?></td>
                    <td><?= htmlspecialchars($row['modelo_gabinete']) ?></td>
                    <td><?= htmlspecialchars($row['modelo_monitor']) ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-edit">Editar</a>
                        <a href="deletar.php?id=<?= $row['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir esta máquina?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>