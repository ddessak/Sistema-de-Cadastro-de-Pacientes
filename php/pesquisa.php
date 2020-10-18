
<!DOCTYPE html>
<html> 
    <head>

        <title>Resultado</title>
        <meta charset="utf-8" > 
        <link href="../css/menu.css" type="text/css" rel="stylesheet" />
        <link href="../css/pesquisa.css" type="text/css" rel="stylesheet" />
        <link rel="shortcut icon" href="../imagem/saude.png">

    </head>
    <body>
        

        <div class="menu">

            <a href="todos.php">Todos os pacientes </a>
            <a href="../index.php">Home &nbsp;| </a>

            <img src="../imagem/saude.png" alt="">

        </div>

        <div class="image">
            <a href="pacientes.php"><img src="../imagem/voltar.png" alt=""></a>
        </div>

        <?php 
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "paciente";

            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

            $pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
                    
            if($pesquisa){
                $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
                $resultado = "SELECT * FROM registro WHERE cpf LIKE '%$cpf%'";
                $resultado_usuario = mysqli_query($conn, $resultado);
                
                while ($linha = mysqli_fetch_assoc($resultado_usuario)){
                    echo "
                    <div class='user'>
                        <h1> Paciente: {$linha['nome']} </h1>
                    </div> 
                    
                    ";

                    echo "
                    <center> <table>
                        <tr> 
                            <td> CPF </td>  
                            <td> Nome </td>  
                            <td> RG </td>  
                            <td> SUS </td>  
                            <td> Genero </td>  
                            <td> DN </td>  
                            <td> Responsável </td>  
                            <td> Telefone </td>  

                        </tr> 
                        <tr>  
                            <td> {$linha['cpf']} </td>  
                            <td> {$linha['nome']}</td>
                            <td> {$linha['rg']}</td>
                            <td> {$linha['sus']}</td>
                            <td> {$linha['genero']}</td>
                            <td> {$linha['nascimento']}</td>
                            <td> {$linha['familia']}</td>
                            <td> {$linha['telefone']}</td>
                        </tr> 
                    </table border='1'></center>";


                    echo "
                    <div class='endereco'>
                        <h1> Endereço:  </h1>
                    </div> 
                    
                    ";
                    echo "
                    <center> <table> 
                        <tr> 
                            <td> CEP </td>  
                            <td> Logradouro </td>  
                            <td> Numero </td>  
                            <td> Complemento </td>  
                            <td> Cidade </td>  
                            <td> Estado </td> 
                        </tr> 
                        <tr> 
                            <td>{$linha['cep']}</td>
                            <td> {$linha['av']}</td>
                            <td> {$linha['numero']}</td>
                            <td> {$linha['complemento']}</td>
                            <td> {$linha['cidade']}</td>
                            <td> {$linha['estado']}</td>  
                        </tr> 
        

                    </table border='1'></center>";
                }
    
            }

        ?>
        <center> 
            <a href="cadastro.php"> <button>Cadastro </button> </a> 
            <a href="pacientes.php"> <button>Nova Busca</button> </a> 
            <a href=""> <button>Atualizar </button> </a> 
            <a href=""> <button>Excluir </button> </a> 
        </center> 
    </body>

</html>