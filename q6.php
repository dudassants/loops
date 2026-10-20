<?php
$senha = 1234;

$tentativa = readline("Digite sua senha: ");

while ($tentativa != $senha) {
    echo "Senha incorreta\n";
    $tentativa = readline("Digite sua senha: ");
}

echo "Acesso permitido.";
?>