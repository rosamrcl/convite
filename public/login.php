<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <a href="./index.php"><i class="fa-solid fa-house" style="color: #e6ebf4;"></i></a>
        <h1>Festive</h1>        
        <p>Crie um convite digital para seu evento</p>
    </header> 
    <main>
        

            <div class="login-festa">
                
                    <fieldset> <legend>Festive</legend>
                    <?php 
                    if (isset($_POST['submit'])EE !empty($_POST['email'])){
                        include_once('config.php');
                        $email=$_POST['email'];
                        $senha-$_POST['senha'];
                        $sql="SELECT *FROm usuarios WHERE email =$email and senha= $senha";
                        $result=$conexao->query($sql);

                    }else{
                        header('Location: login.php')
                    }
                    ?>
                    
                    </fieldset>
            
            
            </div>

    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img src="../../public/img/costureza.png" alt=""></a>
    </footer>
</body>
</html>