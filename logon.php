<?php



$id_user = $_POST['idFuncionario'];
$senha = $_POST['senha'];



include 'conexao.php';

$select = "SELECT * FROM tb_funcionario WHERE id_funcionario = $id_user";

$query = $conexao-> query ($select);

$resultado = $query->fetch_assoc();

$id_user_banco = $resultado['id_funcionario'];
$id_senha_banco = $resultado['senha'];


if($id_user == $id_user_banco && $senha == $id_senha_banco) {
    
    session_start();
    $_SESSION['funcionario_nm'] = $resultado['nm_funcionario'];

    header("Location: Tela Boas Vindas.php");
  

}else{
    echo "<script>alert('Usuario ou senha incorretos'); history.back() </script>";
}

?>
