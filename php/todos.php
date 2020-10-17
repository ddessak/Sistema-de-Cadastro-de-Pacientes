<DOCTYOE html>

<html>
    <head>

    <title>Pacientes</title>
    <meta charset="utf-8" > 
    <link href="../css/todos.css" type="text/css" rel="stylesheet" />
    <link href="../css/menu.css" type="text/css" rel="stylesheet" />

    </head>
    <body>


        <div class="menu">

            <a href="#">Antigos Pacientes</a>
            <a href="../index.php">Home &nbsp;| </a>

            <img src="../imagem/saude.png" alt="">
                
        </div>
        <h1>Todos os pacientes</h1>
        <?php 
        
            $pdo = new PDO('mysql:host=localhost;dbname=paciente','root', null);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = $pdo->query("SELECT * FROM registro;");

            echo "<center> <table>
                <tr> 
                    <td> ID </td>  
                    <td> CPF </td>  
                    <td> Nome </td>  
                    <td> RG </td>  
                    <td> SUS </td>  
                    <td> Genero </td>  
                    <td> DN </td>  
                    <td> Responsável </td>  
                    <td> Telefone </td>  
                    <td> CEP </td>  
                    <td> Logradouro </td>  
                    <td> Numero </td>  
                    <td> Complemento </td>  
                    <td> Cidade </td>  
                    <td> Estado </td>  
                </tr>

            ";
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo " 
                <tr> 
                    <td> {$linha['id']} </td>  
                    <td> {$linha['cpf']} </td>  
                    <td> {$linha['nome']}</td>
                    <td> {$linha['rg']}</td>
                    <td> {$linha['sus']}</td>
                    <td> {$linha['genero']}</td>
                    <td> {$linha['nascimento']}</td>
                    <td> {$linha['familia']}</td>
                    <td> {$linha['telefone']}</td>
                    <td> {$linha['cep']}</td>
                    <td> {$linha['av']}</td>
                    <td> {$linha['numero']}</td>
                    <td> {$linha['complemento']}</td>
                    <td> {$linha['cidade']}</td>
                    <td> {$linha['estado']}</td>
                </tr> ";
            }
            echo"</table border='1'></center>"
        ?>
        <br>
        <center> 
        <a href="cadastro.php"> <button>Cadastro </button> </a> 
        <a href="pacientes.php"> <button>Busca</button> </a> 
        <a href=""> <button>Atualizar </button> </a> 
        <a href=""> <button>Excluir </button> </a> 
        </center> 
    </body>
</html>