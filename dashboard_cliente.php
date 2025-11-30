<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_tipo'] !== 'cliente') {
    header('Location: index.php');
    exit;
}

$nome = htmlspecialchars($_SESSION['usuario_nome']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Cliente</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<header>
    <h1><img class="header-logo" src="img/logo.png" alt="Logo da Empresa"> Brilho Azul</h1>
    <div class="user-info">
        <span>Olá, <?= $nome ?>!</span>
        <button onclick="window.location.href='logout.php'">Sair</button>
    </div>
</header>

<main>
    <div class="dashboard-container">
        <h2>Painel do Cliente</h2>
        <p>Você pode visualizar produtos e solicitar serviços.</p>

        <div class="card-grid">
            <button class="card" onclick="window.location.href='produtos.php'">Comprar Produto</button>
            <button class="card" onclick="window.location.href='servicos.php'">Serviços</button>
        </div>
    </div>
</main>

<footer>
    &copy; <?= date('Y') ?> Sistema. Todos os direitos reservados.
</footer>

</body>
</html>
