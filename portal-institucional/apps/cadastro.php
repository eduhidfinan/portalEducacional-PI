<?php

require_once('db.php');

$nome = $_POST['nomeC'];
$logra = $_POST['logra'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO cadastro VALUES (null,'$nome','$logra', '$numero', '$bairro', '$telefone', '$email', '$cpf')";
if($conn ->query($sql)){
    echo "<style>
        .sucesso{
            display: flex;
            justify-content: space-around;
            width: 500px;
            margin: auto;
            font-family: 'Source Sans 3', sans-serif;
        }

         p{
            text-align: center;
            background-color: green;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: auto;
            width: 480px;
            height: 60px;
            font-weight: 700;
            font-size: 28px;
            color: #FBFBFB;
            border: none;
            margin-top: 50px;
            font-family: 'Source Sans 3', sans-serif;
        }
        .novo{
            text-align: center;
            display: block;
            background-color: #17c3b2;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 200px;
            padding: 2px;
            height: 30px;
            font-size: 22px;
            color: #FBFBFB;
            font-family: 'Source Sans 3', sans-serif;
            border: none;
            text-decoration: none;
            margin-top: 50px;
        }
        .lista{
            text-align: center;
            background-color: #4293f5;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 200px;
            display: block;
            font-family: 'Source Sans 3', sans-serif;
            height: 30px;
            font-size: 22px;
            color: #FBFBFB;
            padding: 2px;
            border: none;
            text-decoration: none;
            margin-top: 50px;
         }
     </style>
        
            <p>Cadastrado com sucesso</p>
        <div class='sucesso'> 
            <a class='novo' href='/portal-institucional-pi/portal-institucional/i_diretor/cadastros/cadastro_professsor/cadastro_professor.html'>Novo Cadastro</a>
            <a class='lista' href='/portal-institucional-pi/portal-institucional/i_diretor/lista_cadastros/lista_professores/lista_professor.php'>Ver professores</a> 
        </div>
    ";
    

    



}
?>


