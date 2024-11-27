<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userData = array(
        'email' => $email,
        'password' => $password
    );

    $file = 'usuarios.json';

    if (file_exists($file)) {
        $jsonData = file_get_contents($file);
        $arrayData = json_decode($jsonData, true);
    } else {
        $arrayData = array();
    }

    $arrayData[] = $userData;

    $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

    if (file_put_contents($file, $jsonData)) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados.";
    }
}
?>
