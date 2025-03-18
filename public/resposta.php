<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
</head>
<body>
    <header>
        <a href="./index.php"><i class="fa-solid fa-house" style="color: #e6ebf4;"></i></a>      
        <h1>Festive</h1> 
        <p>Crie um convite digital para seu evento</p>
    </header>
        <main>
            <div class="formula">
                <fieldset><legend>Dados do convite</legend>

                <?php
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $evento=($_POST['evento']);
                    $inicio=($_POST ['inicio']);
                    $fim=($_POST['fim']);
                    $tipoevento=($_POST['tipoevento']);
                    $descricao=($_POST['descricao']);
                    $temaevento=($_POST['temaevento']);
                    $imagem=($_POST['imagem']);
                    $nome-($_POST['nome']);
                    $email=($_POST['email']);
                    $telefone=($_POST['telefone']);
                    $termos=($_POST['termos']);
                    $aceitosms=($_POST['aceitosms']);


                }
                
                
                
                ?>
                </fieldset>

            </div>
        </main>
    <footer>
      <a href="https://github.com/RosaCL"
        ><img src="../../public/img/costureza.png" alt=""
      /></a>
    </footer>
    
</body>
</html>