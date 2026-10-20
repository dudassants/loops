<?php
$opcao = 1;

while ($opcao != 0) {
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";

    $opcao = readline("Escolha uma opção: ");
}
echo "Programa encerrado.";
?>