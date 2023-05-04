<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva CEP</title>
</head>
    <body>
        <form action="" method="POST" enctype="">
        <h1>Salva Cep</h1>
        <input type="text" name="cepUpload"><br>
        <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php

require_once "config.php";

$cep = $_POST["cepUpload"];
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

$insere = new Cep($data["cep"], $data["logradouro"], $data["complemento"],
$data["bairro"], $data["localidade"], $data["uf"], $data["ibge"], $data["gia"],
$data["ddd"], $data["siafi"]);
$insere->insertCEP();

print_r($data);


?>