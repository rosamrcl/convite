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
        <h1>Festive</h1>
        <p>Crie um convite digital para seu evento</p>
    </header>
    <main>
        <div class="formula">
            <fieldset><legend>Dados do convite</legend>

            <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $login=($_POST['login']);
                $senha=($_POST ['senha']);
            
                header("Location:../ressources/views/convite.html");
            }
    
            ?>
    

            </fieldset>
        </div>
    </main>
    <footer>
        <a href="https://github.com/RosaCL"
            ><img src="../../public/img/costureza.png" alt=""/></a>
    </footer>
</body>
</html>