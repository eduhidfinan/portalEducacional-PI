<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link rel="stylesheet" href="lista_professor.css">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="../../img/logo.png" alt="logo">
            <h1>School</h1>
            <div class="vertical-line-1"></div>   
        </div>
        <h2>Lista de Professores</h2>
        <div class="user">
            <img src="../../img/user.svg" alt="usuário">
            <p>Usuário</p>
        </div>
    </header>
    <div class="horizontal-line"></div>   
    <main class="main-content">
        <div class="box-content">
            <div class="content-2">
                <a href="../../cadastros/cadastro_professsor/cadastro_professor.html"><button class="button1">Adicionar</button></a>
                <a href="../../cadastros/remove_professor/remove_professor.php"><button class="button2">Remover</button></a>
            </div>
        <div class="box">
        <?php 
            require('/xampp/htdocs/portal-institucional-pi/portal-institucional/apps/db.php');
            $sql = $conn->prepare("SELECT * FROM cadastro");
            $sql->execute();
            $dados = $sql->fetchAll();
        ?>
            <?php  
                    if(count($dados) > 0){
                        echo "<table>
                        <thead>
                            <tr>
                                <td id='borda1'>Nome Completo</td>
                                <td>Gênero</td>
                                <td>Logradouro</td>
                                <td>Nº</td>
                                <td>Bairro</td>
                                <td>Celular</td>
                                <td>E-mail</td>
                                <td>CPF</td>
                                <td id='borda2'>Matrícula</td>
                            </tr>
                        </thead>";

                        foreach($dados as $chave => $valor){
                            echo "<tr>
                                    <td class='disciplinas'>".$valor['nome']."</td>
                                    <td><!--<div class='qdAvisoP'>--></div></td>
                                    <td>".$valor['logradouro']."</td>
                                    <td>".$valor['numero']."</td>
                                    <td>".$valor['bairro']."</td>
                                    <td>".$valor['celular']."</td>
                                    <td>".$valor['email']."</td>
                                    <td>".$valor['cpf']."</td>
                                    <td>".$valor['id']."</td>
                                </tr>
                            ";
                        }
                        echo "</table>";
                        
                    }else{
                        
                        echo "
                        <style>
                        p{
                            text-align: center;
                            margin-top: 100px;
                            font-size: 30px;
                            color: #fe6d73;
                        }
                        </style>
                        <p id='borda1'>Nenhum professor Cadastrado</p>";
                    }
                     
                

            ?>
            
        </div>
        </div>
        <div class="vertical-line-2"></div>   
        <nav class="nav-menu">
            <div class="menu-item">
                <img src="../../img/user-plus.svg" alt="linha do tempo">
                <a href="../../cadastros/cadastros.html">Cadastros</a>
            </div>
            <div class="menu-item">
                <img src="../../img/users.svg" alt="calendário">
                <a href="../../lista_cadastros/lista_cadastros.html">Lista de Cadastros</a>
            </div>
            <div class="menu-item">
                <img src="../../img/file-plus.svg" alt="frequência">
                <a href="../../disciplinas/disciplinas.html">Disciplinas</a>
            </div>
        </nav>
    </main>
</body>
</html>