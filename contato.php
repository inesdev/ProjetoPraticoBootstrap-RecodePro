<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href='css/styles.css'>
    </head>

    <body>
        
     <!-- Menu -->
     <?php include_once('menu.html')?>

        <main class="container-fluid">
        <h2 class="text-info">
            Contato
        </h2>
        <hr>
        
        <div class="container-fluid">
                <div class="nav text-info">
                    E-mail: contato@fullstackeletro.com.br | Whatsapp: (11)99506-3569
                </div> 
        </div> 

        <br>

        <div class="container-fluid">
        <h3 class="nav text-info"> Peça o seu produto: </h3><br>    
        </div>

        <!-- Formulário -->
        
        <form method='post' name='pedidos'> 
            <div class="container-fluid">
                <label class="nav text-info"> 
                Nome:
                </label><br> 
                <input class= "form-control" type="text" name="nome" style="width:500px"><br> 

                <label class="nav text-info">Endereço:</label><br> 
                <input class= "form-control" type="text" name="endereco" style="width:500px"><br> 
                
                <label class="nav text-info">Telefone:</label><br> 
                <input class= "form-control" type="number" name="telefone" style="width:500px"><br> 
            
                <label class="nav text-info">Produto:</label><br> 
                <select class= "form-control" name="produto" style="width:500px">
                    <option value=""></option>
                    <option value="Panela">Panela Eletrica de Arroz Mondial</option>
                    <option value="Panela 2">Panela Eletrica de Arroz Mondial PE-10 700W</option>
                    <option value="Liquidificador">Liquidificador Mondial com Filtro Turbo L900FB com 5 Velocidades</option>
                    <option value="Liquidificador 2">Liquidificador Mondial Turbo L-1000 RI com 12 Velocidades</option>
                    <option value="Sanduicheira">Sanduicheira e Grill Britania Crome 2P</option>
                    <option value="Sanduicheira 2">Sanduicheira Britania Bello Pane</option>
                    <option value="Ventilador">Ventilador de Mesa Mondial - 3 Velocidades</option>
                    <option value="Ventilador 2">Ventilador de Coluna Malory - 3 Velocidades</option>
                    <option value="Aspirador">Aspirador de Po Britania Faciclean</option>
                    <option value="Aspirador 2">Aspirador de Po Vertical Philco</option>
                    <option value="Centrifuga">Centrifuga de Roupas Britania 12Kg</option>
                    <option value="Centrifuga 2">Centrifuga de Roupas Mueller Super 5 kg</option>
                </select><br>  

                <label class="nav text-info">Quantidade:</label><br> 
                <input class= "form-control"type="number" name="quantidade" style="width:500px"><br><br>
                <button class="btn btn-primary" type="submit" name="submit" value="Enviar" style="width:500px">Enviar</button><br><br>
            </div>
        </form> 
        

        <!-- Fim Formulário -->

    <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "bancofullstack";

        // Conexão 
        $conn = mysqli_connect($servername, $username, $passoword, $database);

        // Verifica a conexão 
        if(!$conn) {
            die("A conexão com o Banco de Dados falhou: " .mysqli_connect_error());
        }

        if(isset($_POST['nome']) && isset($_POST['endereco']) && ($_POST['telefone']) && isset($_POST['produto']) && ($_POST['quantidade'])){ 
                
            $nome = $_POST['nome']; 
            $endereco = $_POST['endereco']; 
            $telefone = $_POST['telefone']; 
            $produto = $_POST['produto'];  
            $quantidade = $_POST['quantidade']; 

            $sql = "insert into pedidos (nome, endereco, telefone, produto, quantidade) values('$nome', '$endereco', '$telefone', '$produto', '$quantidade')"; 
            $result = $conn->query($sql); 
            
            if($result){ 
                echo "Pedido efetuado com sucesso!"; 
            }
            else{ 
                echo "Houve um erro, pedido não efetuado!";
            }             
        }
    ?> 
    </main>
    <br>
        <footer>
            <p class="nav justify-content-center">
                Formas de Pagamento
            </p>
            <div class="nav justify-content-center">
            <img src="./imagens/pagamento.jpg" alt="Formas de Pagamento">
            </div>
        </footer>
    </body>
</html>