<?php 

include_once("cabecalho.php");

?>
<body>
 
    <div class="wrapper fadeInDown">
        <div id="formContent">
        <div class="fadeIn first">
            <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
        </div>

            <!-- Login Form -->
            <form action="login.php" method="POST">
                <input type="text" class="fadeIn second" name="nome_usuario" placeholder="Usuário">
                <input type="password"  class="fadeIn third" name="senha" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" name="acessar" value="Acessar">
            </form>
        </div>
    </div>
</body>
</html>