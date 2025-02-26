<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .data-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .data-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .data-container p {
            margin: 10px 0;
        }
        .header-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .header-container pre {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <h2>Dados Recebidos</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
            // Verifica se os dados foram enviados
            if (isset($_REQUEST['nome']) && isset($_REQUEST['telefone']) && isset($_REQUEST['email']) && isset($_REQUEST['mensagem'])) {
                echo "<p><strong>Nome:</strong> " . htmlspecialchars($_REQUEST['nome']) . "</p>";
                echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_REQUEST['telefone']) . "</p>";
                echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_REQUEST['email']) . "</p>";
                echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($_REQUEST['mensagem'])) . "</p>";
            } else {
                echo "<p>Nenhum dado recebido.</p>";
            }
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
        ?>
    </div>

    <div class="header-container">
        <h2>Cabeçalho da Requisição</h2>
        <pre>
<?php
print_r(apache_request_headers());
?>
        </pre>
        <p><strong>Método Utilizado:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
    </div>
</body>
</html>