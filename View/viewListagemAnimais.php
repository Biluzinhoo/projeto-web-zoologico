<style>
#tabela_usuarios,th,td {
    border-collapse: collapse;
    border: 1px solid #ddd;
}
#tabela_usuarios {
    padding: 15px;
    text-align: left;
    width: 100%;

}
#tabela_usuarios thead tr th {
    background-color: #333;
    color: #fff;
    padding: 5px;
}
#tabela_usuarios tbody tr td {
    padding: 10px;
}
/* pinta tabela linha sim linha não */
#tabela_usuarios tbody tr:nth-child(2n) {
    background-color: #f2f2f2;
}
/* houver */
#tabela_usuarios tbody tr:hover {
    background-color: #ddd;
}
/*estiliza links como botões */
#tabela_usuarios tbody tr td a {
    background-color: #333;
    color: #fff;
    padding: 5px;
    text-decoration: none;
    margin:5px;
}


</style>
<table id="tabela_usuarios">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Cadastro</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include_once("viewMenu.php");
        ?>
        <h1>Lista de Usuarios</h1>
       

        <?php         
            include_once (__DIR__."/../Model/DAUsuario.php");
            
            $usuarios = getAllUser($pesquisaByName);   
            foreach($usuarios as $usuario){
                echo "<tr>";
                echo "<td>".$usuario['id']."</td>";
                echo "<td>".$usuario['nome']."</td>";
                echo "<td>".$usuario['email']."</td>";
                echo "<td>".$usuario['data_cadastro']."</td>";
                echo "<td>";
                echo "<a href='telaEditarUsuario.php?id=".$usuario['id']."'>Editar</a>";
                echo "<a href='excluir_usuario.php?id=".$usuario['id']."&op=confirma_ok'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

</div>