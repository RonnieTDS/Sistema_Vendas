<?php 

require_once("verifica_sessao.php");

if (isset($_SESSION["usuario_logado"])) 
{
    unset($_SESSION["usuario_logado"]);
}   