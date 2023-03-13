<?php
    include('conexao.php');

    require_once('conexao.php');
    // executar consulta SQL
    $stmt = $mysqli->query('SELECT FROM clientes');

// função para gerar as linhas da tabela
function gerarLinhasTabela($stmt) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['cpf'] . '</td>';
        echo '<td>' . $row['telNumber1'] . '</td>';
        echo '</tr>';
    }
}