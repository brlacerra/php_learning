<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
    <style>
        /* Estilos CSS para o formulário */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
        }
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px -10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="age">Idade:</label>
            <input type="number" id="age" name="age" required><br>

            <button type="submit" name="submit">Enviar</button>
        </form>
    </div>

    <?php
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $deviceName = $_SERVER['HTTP_USER_AGENT'];
        $accessDate = date('Y-m-d H:i:s');
        $location = $_SERVER['REMOTE_ADDR'];

        $data = array(
            'nome' => $name,
            'idade' => $age,
            'dispositivo' => $deviceName,
            'data_acesso' => $accessDate,
            'localizacao' => $location
        );
        setcookie("NOME_DO_COOKIE", json_encode($data), time() + 7200);

        echo "<div class='container'>";
        echo "<h2>Dados recebidos:</h2>";
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        echo "</div>";
    }
    ?>
</body>
</html>