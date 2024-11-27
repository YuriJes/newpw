<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
 
body{
    font-family: "Poppins", sans-serif;
    align-items: center;
    background: url(nathan-dumlao-OTq59L9RbEk-unsplash.jpg);
   background-color: #fcfcfc;
   background-size: cover;
   display: flex;
    
   background-repeat: no-repeat;
    justify-content: center;
}


.titulo{

    font-size: 56px;
    color:#1994e0;
}

.conteudo{

    color:black;
    font-size: 20px;
}
.navbar {
            background-color: #2acdff;
            padding: 1rem;
            display: flex;
            justify-content: space-around;
            position: fixed; 
            top: 0;
            height: 30px;
            width: 100%; 
            z-index: 1000; 
        }
        .navbar a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.0rem;
        }
        .navbar a:hover {
            background-color: #20aaff;
            height: 30px;
            border-radius: 50px;
            width: 100px;
        }

        .user{
            font-size: 1.0rem;
            color: #ffffff;
            font-weight: bold;
            display: inline-block;
            vertical-align: middle;
           
        }

        .nmUsuario{
            font-size: 1.0rem;
            color: white;
            vertical-align: middle;
           
            
        }

        .usuario{
            margin-left: -4%;
            margin-right: 20px;
        }

</style>
</head>


<body>
    <nav class="navbar">
        <div class="usuario">
            <img style="vertical-align: middle;" src="user.svg" width="30px" height="30px">
        <span class="user">User: </span> <i class="nmUsuario"> <?php  
        session_start();
        if(isset( $_SESSION['funcionario_nm'])){

           $name = $_SESSION['funcionario_nm'];
           echo $name;

        }
        else{
            echo "<script>alert('Você não realizou o login!'); history.back() </script>";
        }
        
        

        ?></i>
        </div>
        <a href="Tela Categoria.php">Categoria</a>
        <a href="Tela Cliente.php">Cliente</a>
        <a href="Tela Fornecedor.php">Fornecedor</a>
        <a href="Tela Funcionario.php">Funcionário</a>
        <a href="Tela Lançamento.php">Lançamento</a>
        <a href="logout.php" ><u style="margin-right: -4.5%;"> Sair </u></a>
    </nav>
   

    <div style="margin-top: 11% ;margin-left:4%;width: 100%;">
        <b class="titulo">Seja Bem Vindo!</b>
        <br>
        <br>
        <label class="conteudo" style="margin-left: 10px;"> No momento estamos em fase de mudanças e nosso site está </label >
            <br>
        <label class="conteudo" style="margin-left: 10px; margin-top: -2px;"> temporariamente fora do ar, peçamos que tenha paciência e</label>
        <br>
        <label class="conteudo" style="margin-left: 10px; margin-top: -2px;"> aguarde futuras atualizações.</p>
            <br>
            <br>
            <i class="conteudo" style="margin-left: 10px; margin-top: -2px;text-decoration:bold ;"> <b> Atenciosamente: 'MIMUSCLE'</b></i>



    </div>


</body>

</html>