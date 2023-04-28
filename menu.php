<?php 
$url_absoluta = "http://localhost/aulas_senai/TDS09/sistema_venda/";

$url = $_SERVER['REQUEST_URI'];

$explode_url = explode("/", $url);

$segmento = 5;

if ($explode_url[$segmento] != "cliente")
{    
    $url_cliente = $url_absoluta."cliente/";
}
else 
{   
    $url_cliente = "";    
}

if ($explode_url[$segmento] != "produto")
{    
    $url_produto = $url_absoluta."produto/";
}
else 
{   
    $url_produto = "";    
}

if ($explode_url[$segmento] != "estoque")
{    
    $url_estoque = $url_absoluta."estoque/";
}
else 
{   
    $url_estoque = "";    
}


if ($explode_url[$segmento] != "pedido")
{    
    $url_pedido = $url_absoluta."pedido/";
}
else 
{   
    $url_pedido = "";    
}
    
?>

<ul>
    <li><a href="<?php echo $url_absoluta."home/home.php"; ?>">Inicio</a></li>
    <li>
        <a href="<?php  
            echo $url_cliente."form_cliente.php"; ?>">
            Cadastrar Cliente
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_cliente."lista_cliente.php"; ?>">
            Listar Cliente
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_produto."form_produto.php"; ?>">
            Cadastrar Produto
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_produto."lista_produto.php"; ?>">
            Listar Produto
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_pedido."form_pedido.php"; ?>">
            Cadastrar Pedido
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_pedido."lista_pedido.php"; ?>">
            Listar Pedido
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_estoque."form_estoque.php"; ?>">
            Cadastrar Estoque
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_estoque."lista_estoque.php"; ?>">
            Listar Estoque
        </a>
    </li>
    <li><a href="logout.php">Sair</a></li>
</ul>

