<style>
table {
    width: 100%;
    border-collapse: collapse;
}
td, th {
    padding: 8px;
    border: 1px solid #ccc;
}
tr:nth-child(even) {
    background: #f2f2f2;
}
a {
    margin-right: 10px;
}
</style>

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
        <a href="telaEditarAnimal.php?id=<?= $a['id'] ?>">Editar</a>
        <a href="../Controller/animalController.php?excluir=<?= $a['id'] ?>">Excluir</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
