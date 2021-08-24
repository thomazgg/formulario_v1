<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>  

    <!-- Formulário -->

    <form method="POST" action="calcula.php">

        <div>
            <h1 id="titulo">Cadastro de Clientes<br><br></h1>
        </div>
        
        <!-- Dados do Cliente -->
        <fieldset>
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" maxlength="40" required><br><br>
                <label for="cpf"><strong>CPF</strong></label>
                <input type="text" name="cpf" maxlength="15" required><br><br>
                <label for="endereco"><strong>Endereço</strong></label>
                <input type="text" name="ender" maxlength="40" required><br><br>
            </div>
        </fieldset>
        
        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" maxlength="40" required><br><br>
            <label for="celular"><strong>Celular</strong></label>
            <input type="text" name="celular" maxlength="16" required><br><br>
            <label for="idade"><strong>Data de nascimento</strong></label>
            <input type="date" name="idade" maxlength="3" required><br><br>
        </div>
        <!-- Dados do Pedido -->

        <fieldset>
            <div class="campo">
                <label for="quantidade"><strong>Quantidade</strong></label>
                <input type="number" name="qtd" selected="1" min="1" max="99" required ><br><br>
            </div>
        </fieldset> 

        <fieldset>
            <div class="campo">
                <label><strong>Tamanho</strong></label>
                <select name="tam" id="tam" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Pequeno</option>
                    <option>Médio</option>
                    <option>Grande</option>
                </select>
            </div>
        </fieldset>
        
        <div class="campo">
            <label><strong>Cor</strong></label>
            <select name="cor" id="cor" required>
                <option selected disabled value="">Selecione</option>
                <option>Azul</option>
                <option>Vermelho</option>
                <option>Preto</option>
                <option>Branco</option>
            </select>
        </div>

        <div id="check">
            <label><strong><br>Deseja receber recomendações de produtos e lançamentamentos?</strong></label><br><br>
            <input type="checkbox" id="receber1" name="receber1" value="whatsapp">
            <label for="receber1"> Whatsapp</label>
            <input type="checkbox" id="receber2" name="receber2" value="email">
            <label for="receber2"> Email</label>
            <input type="checkbox" id="receber3" name="receber3" value="sms">
            <label for="receber3"> SMS</label><br><br>
        </div>

        <!-- Formas de Pagamento -->

        <div class="campo">
            <label><br><strong>Selecione a forma de pagamento</strong></label>
            <label>
                <input type="radio" name="pagamento" value="Cartão de crédito" checked>Cartão de crédito
            </label>
            <label>
                <input type="radio" name="pagamento" value="Boleto Bancário">Boleto Bancário
            </label>
        </div>

        <!-- Frete e/ou Taxa de Entrega -->

        <div class="campo">
            <label><strong>Frete</strong></label>
            <select name="frete" id="frete" required>
                <option selected disabled value="">Selecione</option>
                <option>Agudos</option>
                <option>Arealva</option>
                <option>Bauru</option>
                <option>Pederneiras</option>
                <option>Piratininga</option>
                <option>Reginópolis</option>
            </select>
        </div>

        <!-- Mensagem -->

        <div class="campo">
            <br>
            <label for="experiencia"><strong>Mensagem: </strong></label>
            <textarea rows="6" class="_2bfjEn" type="text" placeholder="(Opcional) Deixe uma mensagem para o vendedor" 
            value="" style="width: 26em" id="experiencia" name="experiencia" maxlength="500"></textarea>
        </div>

        <input type="submit" value="Enviar formulário" class="btn"> 
        &nbsp;
        <input type="reset" value="Apagar tudo" class="btn">      

    </form>

    <script src="app.js"></script>

</body>

</html>
