<?
/* aquivos com funções que manifipulam o banco de dados e permite inserção, edicação , recuperação de usuarios */

function conectar(){
     $host = "mysql";
     $db_name = "crud_ppi";
     $username = "root";
     $password = "rootpass";
     $conn = null;
    try {
        $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, 
        $username, $password);
        $conn->exec("set names utf8");
    
    } catch(PDOException $exception) {
     
        echo "Erro de conexão: " . $exception->getMessage();
    }
    return $conn;
}
function getAllUser( $str =""){
    $conn = conectar();
    $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$str%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
}
function getUser($id){
    $conn = conectar();
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    return $usuario;
}
function insertUser($nome, $email, $senha){
    $conn = conectar();
    $sql = "INSERT INTO usuarios (nome, email, senha,data_cadastro) VALUES (:nome, :email, :senha, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();
    return $stmt->rowCount();
}
function updateUser($id, $nome, $email, $senha){
    $conn = conectar();
    $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    
    $stmt->execute();
    return $stmt->rowCount();
}
function deleteUser($id){
    $conn = conectar();
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
    
}


?>