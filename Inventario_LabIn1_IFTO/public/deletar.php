<?php
require_once '../dao/ComputadorDAO.php';

if (isset($_GET['id'])) {
    $dao = new ComputadorDAO();
    $dao->delete($_GET['id']);
}

header("Location: index.php");
exit;
?>