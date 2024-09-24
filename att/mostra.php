<?php
// Inclui a definição da classe Produto antes de iniciar a sessão
require_once 'produto.php';

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Lista de Produtos</h2>
        <div class="row">
            <?php
            if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos']) && count($_SESSION['produtos']) > 0) {
                foreach ($_SESSION['produtos'] as $produto) {
                    if ($produto instanceof Produto) {
                        echo '<div class="col-md-4">';
                        $produto->exibirInformacoes();
                        echo '</div>';
                    } else {
                        echo '<p>Erro: Produto inválido encontrado na sessão.</p>';
                    }
                }
            } else {
                echo '<p>Nenhum produto adicionado.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
