<h1>Listar Usuarios</h1>
<?php

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);
$qtd = $res->num_rows;


if ($qtd > 0) {
    print "<table class='table table-hover table-bordered text-light'>";
    print "<tr>";
    print "<th class='text-light'>Nome</th>";
    print "<th class='text-light'>E-Mail</th>";
    print "<th class='text-light'>Data de Nascimento</th>";
    print "<th class='text-light'>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        echo "<td>" . $row->data_nasc . "</td>";

        print "<td>
        <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class ='btn btn-success'>Editar</button>
        
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}
        else{false;}\" class ='btn btn-danger'>Excluir</button>
        </td>";

        print "</tr>";
    }
} else {
    print "<p class = alert alert-danger'>Não encontrou resultado!</p>";
}



?>