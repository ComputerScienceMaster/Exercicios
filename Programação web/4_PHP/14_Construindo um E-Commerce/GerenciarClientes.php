<?php
require_once 'Cliente.php';

$cliente = new Cliente();

$arrayFiltrado = array();


if (isset($_POST['acao']) && $_POST['acao'] == 'filtrar') {

    $cliente = new Cliente();

    if ($_POST['opcaoFiltragem'] == "nomeCompleto") {
        $arrayFiltrado = $cliente->buscar('nomeCompleto', $_POST['query']);
    } else if ($_POST['opcaoFiltragem'] == "primeiroNome") {
        $arrayFiltrado = $cliente->buscar('primeiroNome', $_POST['query']);
    } else if ($_POST['opcaoFiltragem'] == "nomeDoMeio") {
        $arrayFiltrado = $cliente->buscar('nomeDoMeio', $_POST['query']);
    } else if ($_POST['opcaoFiltragem'] == "ultimoNome") {
        $arrayFiltrado = $cliente->buscar('ultimoNome', $_POST['query']);
    }
} else {
    $arrayFiltrado = $cliente->buscar('', '');
}
?>


<html>
    <head>
        <title>Gerenciar clientes</title>
    </head>

    <?php include 'navbar.php'; ?>
    <body>
        <h1>Clientes cadastrados no sistema</h1>

        <table border="1">
            <thead>
                <tr>
                    <th>RG</th>
                    <th>Nome completo</th>
                    <th>Data de Nascimento</th>
                    <th>Pontuação</th>
                </tr>
            </thead>

            <fieldset style="margin-bottom: 20px">
                <legend>Filtrar</legend>
                <form method="POST" action="GerenciarClientes.php">
                    <input type="text" name="query" placeholder="Digite um nome para filtrar">
                    <select name="opcaoFiltragem">
                        <option value="nomeCompleto">Nome completo </option>
                        <option value="primeiroNome">Primeiro nome</option>
                        <option value="nomeDoMeio">Nome do meio</option>
                        <option value="ultimoNome">Último nome</option>

                    </select>
                    <input type="hidden" name="acao" value="filtrar"/>
                    <input type="submit" value="Filtrar">
                </form>
            </fieldset>
            <tbody>
                <?php
                for ($i = 0; $i < count($arrayFiltrado); $i++) {
                    echo '<tr>';
                    echo '<td> ' . $arrayFiltrado[$i]->rg . '</td>';
                    echo '<td> ' . $arrayFiltrado[$i]->primeiroNome . ' ' . $arrayFiltrado[$i]->nomeDoMeio . ' ' . $arrayFiltrado[$i]->ultimoNome . '</td>';
                    echo '<td> ' . $arrayFiltrado[$i]->dataDeNascimento . '</td>';
                    echo '<td> ' . $arrayFiltrado[$i]->pontuacao . '</td>';

                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>


    </body>
</html>

