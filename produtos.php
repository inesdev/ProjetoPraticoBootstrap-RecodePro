<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='css/styles.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="js/script.js"></script>
        <title>Produtos - Full Stack Eletro</title>
    </head>
    <body>

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
    ?>
       
     <!-- Menu -->
     <?php include_once('menu.html')?>

        <main class="container-fluid">
        <header>
        <h2 class="text-info">Produtos</h2>    
        </header>
        <hr>

            <aside class="categorias">
                <h3 class="text-info">Categorias</h3>
                <nav class="nav nav-bar-expand-lg navbar-light bg-light">
                <div id="navbar-nav">    
                    <ul class="col">
                    <li class="nav-item" onclick="mostrar_todos()">
                    <a class="nav text-info" href="#"> Todos os Produtos (12) </a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('panelas')">
                    <a class="nav text-info" href="#">Panelas Elétricas (2)</a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('liquidificadores')">
                    <a class="nav text-info" href="#">Liquidificadores (2)</a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('sanduicheiras')">
                    <a class="nav text-info" href="#">Sanduicheiras (2)</a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('ventiladores')">
                    <a class="nav text-info" href="#">Ventiladores (2)<a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('aspiradores')">
                    <a class="nav text-info" href="#">Aspiradores de Pó (2)</a>
                    </li>
                    <li class="nav-item" onclick="mostrar_categoria('centrifugas')">
                    <a class="nav text-info" href="#">Centrífugas de Roupas (2)</a>
                    </li>
                    </ul>
                </div>    
                </nav>
            </aside>
            
            <div class="secaoprodutos"> 

                <?php
                    $sql = "select * from produtos";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                            
                ?>
                    <div class="produto" style="display:inline-block;" id=<?php echo $rows["categoria"];?>>
                        <img src="<?php echo $rows["img"];?>" width="120px" onclick="aumentar(this)">
                        <p><?php echo $rows["descricao"];?></p>
                        <p class="precoa">R$<?php echo $rows["preco_antigo"]; ?></p>
                        <p class="preco">R$<?php echo $rows["preco_atual"]; ?></p>
                        <hr>
                    </div>
                
                <?php
                        } 
                    } else {
                        echo "Nenhum produto cadastrado!";
                    }
                ?>
            </div>
        </main>            
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