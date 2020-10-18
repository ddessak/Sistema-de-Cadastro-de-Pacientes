<DOCTYOE html>
<html>
    <head>

        <title>Busca</title>
        <meta charset="utf-8" > 
        <link rel="shortcut icon" href="../imagem/saude.png">
        <link href="../css/menu.css" type="text/css" rel="stylesheet" />
        <link href="../css/pacientes.css" type="text/css" rel="stylesheet" />
        

    </head>
    <body>


        <div class="menu">

            <a href="todos.php">Todos os pacientes </a>
            <a href="../index.php">Home &nbsp;| </a>

            <img src="../imagem/saude.png" alt="">
        
        </div>
        
        <div class="img">

            <img src="../imagem/busca.png" alt="">
           
        </div>

        <div class="form">
            
            <form action="pesquisa.php" method="POST">

                <input type="number" name="cpf" placeholder="Digite o CPF" maxlength="14" required> 
                <input type="submit" name="pesquisa"value="Pesquisar"> 
            </form>

        </div>
    </body>
</html>