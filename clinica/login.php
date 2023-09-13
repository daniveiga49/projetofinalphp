<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sisgeresaude</title>
</head>
<body>
// no banco de dados existem duas informações
$login = '';
$senha = 987654;

$loginDigitado = "Administradora";
$senhaDigitada = 987654;

if ($loginDigitado == $login and $senhaDigitada == $senha) {
    echo "Logado com sucesso";
} else {
    echo "Erro";
}
</body>
</html>