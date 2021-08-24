<?php
    $nome 	        =$_POST["nome"]; 
    $cpf  	        =$_POST["cpf"];
    $ender  	    =$_POST["ender"];
    $email  	    =$_POST["email"];
    $celular 	    =$_POST["celular"];
    $idade          =$_POST["idade"];
    $preco          = 100;
    $quantidade	    =$_POST["qtd"];
    $tam            =$_POST["tam"];
    $cor            =$_POST["cor"];
    $pagamento	    =$_POST["pagamento"];
    $frete          =$_POST["frete"];
    $total          = 0;

    $total = $preco * $quantidade;

    echo "<br/>=========Mostrando Dados========= <br/><br/>";
    echo "/// Dados do Cliente \\\<br/>";
    echo "Nome: $nome <br/>";
    echo "CPF: $cpf <br/>";
    echo "Endereço: $ender <br/>";
    echo "Email: $email <br/>";
    echo "Celular: $celular <br/>";
    echo "Data de Nascimento: $idade <br/>";
    echo "/// Dados do Pedido \\\<br/>";
    echo "Preço: $preco <br/>";
    echo "Quantidade: $quantidade <br/>";
    echo "Tamanho: $tam <br/>";
    echo "Cor: $cor <br/>";
    echo "/// Formas de Pagamento \\\<br/>";
    echo "Pagamento: $pagamento <br/>";
    echo "/// Frete e/ou Taxa de Entrega \\\<br/>";
    echo "Frete: $frete <br/>";
    echo "/// TOTAL \\\<br/>";
    echo "Valor a Pagar = R$$total,00";	
?>
