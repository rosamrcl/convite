<?php 
session_start();
// echo $_SESSION
if((!isset($_SESSION ['email'])==true)) and (!isset($_SESSION['senha'])==true){
    unset($_SESSION['email']);
    unset($_SESSION{'senha'});
    header('Location:../public/login.php');
}
$logado=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festive</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
</head>
<body>
    <main>
        <?php 
        echo "Bem Vindo $logado"
        ?>
    </main>
    
    
</body>
</html>