<?php
//SESSÃO
session_start(); 
if(isset($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
}
session_unset();

?>