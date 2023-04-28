<?php 

require_once("verifica_sessao.php");

if (!$_SESSION["usuario_logado"]) 
{
    header("Location: http://localhost/aulas_senai/TDS09/sistema_venda/");
}   