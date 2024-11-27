<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Lançamento</title>
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
    min-height: 90vh;
   background-repeat: no-repeat;
    justify-content: center;
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

 
.card {
  width: 40%;
  background-color: #ffffff;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20px 30px;
 
  position: relative;
  overflow: hidden;
  box-shadow: 0px 0px 7px 6px rgba(0, 0, 0, 0.062);
  border-radius:18px;
}
 
.poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}
 
.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}
 
.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}
 
.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
 
.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}
 
.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}
 
.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}
 
.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}
 
.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}
 
.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}
 
.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}
 
.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}
 
.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}
 
.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}
 
.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}
 
.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}
 
.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}
 
.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}




.input {
 width: 85%;
 height: 47px;
 line-height: 28px;
 padding: 0 1rem;
 border: 1px solid transparent;
 border-radius: 50px;
 outline: none;
 background-color: #F3EBEB;
 color: #0d0c22;
 transition: .3s ease;
}

.input::placeholder {
 color: #A5A5A5;
 font-family: "Poppins";
}

.input:focus, input:hover {
 outline: none;
 border-color: #1CA8FF;
 background-color: #fff;
 box-shadow: 0 0 0 ;
}

.inputDescricao {
 width: 85%;
 height: 47px;
 line-height: 28px;
 padding: 0 1rem;
 border: 1px solid transparent;
 border-radius: 40px;
 outline: none;
 background-color: #F3EBEB;
 color: #0d0c22;
 transition: .3s ease;
 
}

.inputDescricao::placeholder {
 color: #A5A5A5;
 font-family: "Poppins";
 transform: translateY(-29px); 
}

.inputDescricao:focus, input:hover {
 outline: none;
 border-color: #1CA8FF;
 background-color: #fff;
 box-shadow: 0 0 0 ;
}

.submit{
    width: 38%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1CA8FF;
 border-radius: 50px;
 outline: none;
 background-color: #1CA8FF;
 color: #ffffff;
 transition: .3s ease;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
}

.submit:hover{
    width: 38%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1994e0;
 border-radius: 50px;
 outline: none;
 background-color: #1994e0;
 color: #ffffff;
 transition: .3s ease;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
}

.submit:active{
    width: 37%;
 height: 39px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1a89ce;
 border-radius: 50px;
 outline: none;
 background-color: #1a89ce;
 color: #ffffff;
 transition: .1s ;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
font-size: 12px;
}

.limpar{
    width: 38%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1CA8FF;
 border-radius: 50px;
 outline: none;
 background-color: #ffffff;
 color: #1CA8FF;
 transition: .3s ease;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
}

.limpar:hover{
    width: 38%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1CA8FF;
 border-radius: 50px;
 outline: none;
 background-color: #ebebeb;
 color: #1CA8FF;
 transition: .1s ease;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
}

.limpar:active{
    width: 37%;
 height: 39px;
 line-height: 28px;
 padding: 0 1rem;
 border: 2px solid #1CA8FF;
 border-radius: 50px;
 outline: none;
 background-color: #cacaca;
 color: #1CA8FF;
 transition: .1s;
 text-decoration: bold;
 font-family: "Poppins";
font-weight: bold;
font-size: 12px;
}






</style>
 
</head>
 
<body>
<nav class="navbar">
        <div class="usuario">
            <img style="vertical-align: middle;" src="user.svg" width="30px" height="30px">
        <span class="user">User: </span> <i class="nmUsuario"> <?php  
     
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
 
   
<center>
    <br >
    
   
<div class="card">
<center>
    <h2>Cadastro<label style="color:#1CA8FF"> Lançamento</label></h2>
<p style="color:#A5A5A5;font-size: 15px;margin-top: -15px;">Prencha os Dados sobre o Lançamento</p>
 
<br>
<form class="form" action="insertLancamento.php" method="POST">
   <input placeholder="  Valor R$" type="text" class="input" style="margin-bottom: 11px;" name="valor" id="valor">
  
    <input placeholder="  Tipo" type="text" class="input" style="margin-bottom: 11px;" name="tipo" id="tipo">
   
    <input placeholder="  Dt Lançamento dd/mm/aa" type="text" class="input" style="margin-bottom: 11px;" name="dataLancamento" id="dataLancamento">
   
    <input placeholder="  ID Categoria" type="text" class="input" style="margin-bottom: 11px;" name="idCategoria" id="idCategoria">
    
    <input placeholder="  ID Fornecedor" type="text" class="input" style="margin-bottom: 11px;" name="idFornecedor" id="idFornecedor">

    <input placeholder="  Descrição" type="text" class="inputDescricao" style="margin-bottom: 11px;height: 125px;" name="descricao" id="descricao">

  
    <br>
    <br>
  

  <div style="margin-bottom: 16px;">
<a href="Tela Cliente.html"><input type="button" class="limpar" value="CANCELAR" style="margin-right: 2%;" ></a> <input type="submit" class="submit" value="CADASTRAR" >
  </div>
</form>

</center>
</div>
</center>
 
 
        
</body>
</html>  