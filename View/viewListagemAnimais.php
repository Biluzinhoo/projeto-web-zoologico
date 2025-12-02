<style>
.table-container {
    width: 90%;
    margin: 30px auto;
    font-family: Arial, sans-serif;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

thead {
    background: #4CAF50;
    color: white;
}

th {
    padding: 12px;
    text-align: left;
    font-size: 16px;
}

td {
    padding: 12px;
    border-bottom: 1px solid #eee;
    font-size: 15px;
}

tr:nth-child(even) {
    background: #f9f9f9;
}

tr:hover {
    background: #e8f5e9;
}

.btn {
    padding: 6px 12px;
    text-decoration: none;
    color: white;
    border-radius: 6px;
    font-size: 14px;
}

.btn-edit {
    background: #2196F3;
}

.btn-edit:hover {
    background: #0b7dda;
}

.btn-delete {
    background: #f44336;
}

.btn-delete:hover {
    background: #d32f2f;
}
</style>


<div class="table-container">
<table>
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Espécie</th>
    <th>Ações</th>
</tr>
</thead>
<tbody>
<?php foreach ($animais as $a): ?>
<tr>
    <td><?= $a['id'] ?></td>
    <td><?= $a['nome'] ?></td>
    <td><?= $a['especie'] ?></td>
    <td>
        <a class="btn btn-edit" href="viewEditarAnimal.php?id=<?= $a['id'] ?>">Editar</a>
        <a class="btn btn-delete" href="../Controller/animalController.php?excluir=<?= $a['id'] ?>">Excluir</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
