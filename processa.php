<DOCTYOE html>

<html>
    <head>

    <title>Cadastrar</title>
    <meta charset="utf-8" > 
    <link href="css/pacientes.css" type="text/css" rel="stylesheet" />
    <link href="css/menu.css" type="text/css" rel="stylesheet" />

    </head>
    <body>


        <div class="menu">

            <a href="#">Todos os pacientes </a>
            <a href="index.php">Home &nbsp;| </a>

            <img src="imagem/saude.png" alt="">
                
        </div>
        <div class="todos">
        <div class="dados">
            <?php

                $vcpf=$_GET["cpf"];
                $vnome=$_GET["nome"];
                $vrg=$_GET["rg"];
                $vsus=$_GET["sus"];
                $vgenero=$_GET["genero"];
                $vnascimento=$_GET["nascimento"];
                $vfamilia=$_GET["familia"];
                $vtelefone=$_GET["telefone"];
                $varquivo=$_GET["arquivo"];
                

                echo "CPF: ".$vcpf;
                echo "<br> Nome: ".$vnome;
                echo "<br> RG: ".$vrg;
                echo "<br> SUS: ".$vsus;
                echo "<br> Genero: ".$vgenero;
                echo "<br> Nascimento: ".$vnascimento;
                echo "<br> Nome da Mãe: ".$vfamilia;
                echo "<br> Telefone: ".$vtelefone;

            ?>

    </div>

    <div class="endereco">
        <?php

            $vcep=$_GET["cep"];
            $vav=$_GET["av"];
            $vnumero=$_GET["numero"];
            $vquadra=$_GET["quadra"];
            $vlote=$_GET["lote"];
            $vcomplemento=$_GET["complemento"];
            $vcidade=$_GET["cidade"];
            $vuf=$_GET["estado"];

            echo "<br> CEP: ".$vcep;
            echo "<br> Av/Rua: ".$vav;
            echo "<br> Numero: ".$vnumero;
            echo "<br> Quadra: ".$vquadra;
            echo "<br> Lote: ".$vlote;
            echo "<br> Quadra: ".$vcomplemento;
            echo "<br> Cidade: ".$vcidade;
            echo "<br> Estado:: ".$vuf;

        ?>
    </div>
    </div>
    </body>
</html>