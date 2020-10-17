<DOCTYOE html>
    <?php session_start(); ?>
<html>
    <head>

    <title>Cadastrar</title>
    <meta charset="utf-8" > 
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    <link href="../css/menu.css" type="text/css" rel="stylesheet" />

    </head>
    <body>


        <div class="menu">

            <a href="pacientes.php">Busca</a>
            <a href="todos.php">Pacientes Ativos &nbsp;| </a>
            <a href="../index.php">Home &nbsp;| </a>

            <img src="../imagem/saude.png" alt="">
                
        </div>

        
        <div class="cadastro"> 

            <img src="../imagem/cadastro.png" alt="">
            <h1>Cadastrar <br> Novos Pacientes</h1>

        </div>
        <div class="confirme" id="confirme">
            <p>Casdastro Realizado com Sucesso</p>
            <br>
            <button onclick="confirme()">OK</button>
        </div> 

        <div class="form" >
            <form  action="processa.php" method="POST">
                 <fieldset> 
                    <legend> Dados do Paciente </legend>
                        
                        <label>CPF:</label>
                        <input type="number" name="cpf" placeholder="Digite o CPF" minlength="11" maxlength="14" required> 

                        <label>Nome do Paciente:</label>
                        <input type="text" name="nome" placeholder="Digite o nome completo" required>

                        <label>RG:</label>
                        <input type="number" name="rg" placeholder="Digite o RG" required>

                        <label>Cartão SUS:</label>
                        <input type="number" name="sus" placeholder="Digite o número do sus" required>
                        <br>
                        <label>Genero:</label>
                        <select id="genero" name="genero" required>
                            <option value="escolha uma opção"> Selecione </option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Não declado">Não decladado</option>
                        </select>

                        <label>Data de nascimento:</label>
                        <input type="date" name="nascimento" required>

                        <label>Nome do Mãe:</label>
                        <input type="text" name="familia" placeholder="Digite o nome completo" required>
                        
                        <label>Telefone:</label>
                        <input type="number" name="telefone" placeholder="Digite o telefone" required>

                        <div class="enviar">

                        </div>
                </fieldset> 

            <div class="clear"></div>
                <fieldset> 
                <legend> Endereço </legend>
                <div class="form-text"> 
                    
                        <label>CEP:</label>
                        <input type="number" name="cep" placeholder="Digite o CEP" required>

                        <label>Av/Rua:</label>
                        <input type="text" name="av" placeholder="Digite o nome da rua" required>

                        <label>Número:</label>
                        <input type="number" name="numero" placeholder="Digite o número" required>
                        
                        <label>Complemento:</label>
                        <input type="text" name="complemento" placeholder="Digite o complemento">
                        <br>
                        <label>Cidade:</label>
                        <input type="text" name="cidade" placeholder="Digite o nome da cidade" required>
                        
                        <label>UF:</label>
                        <select id="estado" name="estado" required>

                            <option value=" Selecione " >Selecione </option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    </fieldset>

            <input type="submit" value="Cadastrar" onclick="confirme()"> 
            <input id="reset" type="reset" value="Limpar"> 

            </form>

        </div>

        <script type="text/javascript"  src="../js/js.js"></script>
    </body>
</html>