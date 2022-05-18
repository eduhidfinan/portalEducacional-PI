<?php
    require('/xampp/htdocs/portal-institucional-pi/portal-institucional/apps/db.php');

    // DELETE
    $sql = $conn->prepare("DELETE FROM cadastro WHERE id=?");
   
    
    if(!empty(isset($_POST['id']))){
        $id =$_POST['id'];
        $sql->execute(array($id));
    }else{
        echo "";
    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Professor</title>
    <link rel="stylesheet" href="remove_professor.css">
</head>
<body>
    <header class="main-header">
        <div class="large-box"></div>
        <div class="circle"></div>
    </header>
    <div class="box">
        <main class="main-content">
            <h1 class="remove-professor">Remoção de Professor</h1>
            <section>
                <form method="post">
                    <div class="remove-boxes">
                        <label for="matricula">Informe o Nº da Matrícula</label>
                        <input type="number" name="id" placeholder="Digite o Nº da matrícula" id="matricula">
                    </div>
                    <section>
                <button type="submit" class="remove-button">Remover Professor</button>
            </section>
                </form>
            </section>
            <!--<section class="login-checkbox">
                <form action="">
                    <label for="lembrar_senha">Lembrar Senha</label>
                    <input type="checkbox" id="lembrar_senha">
                </form>
                <p class="pass-forgot">Esqueceu a senha?</p>
            </section>-->
            
        </main>
    </div>
</body>
</html>