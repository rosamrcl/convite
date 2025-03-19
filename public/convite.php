<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite</title>
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
                $evento=($_POST['evento']);
                $inicio=($_POST ['inicio']);
                $fim=($_POST['fim']);
                $tipoevento=($_POST['tipoevento']);
                $descricao=($_POST['descricao']);
                $temaevento=($_POST['temaevento']);                
                $nome = $_POST['nome']; 
                $email=($_POST['email']);
                $telefone=($_POST['telefone']);
                $termos=($_POST['termos']);
                $aceitoemail=($_POST['aceitoemail']);
                $aceitosms=($_POST['aceitosms']);                
                
            } else {
                header("Location:../ressources/views/convite.html");
            }

            echo "<p>
            <strong>Evento:</strong> $evento <br>
            <strong>Inicio:</strong> $inicio<br>
            <strong>fim:</strong> $fim<br>
            <strong>Tipo Evento:</strong> $tipoevento<br>
            <strong>Descrição:</strong> $descricao<br>
            <strong>Tema Evento:</strong> $temaevento<br>
            <strong>Nome:</strong> $nome<br>
            <strong>E-mail:</strong> $email<br>
            <strong>Telefone:</strong> $telefone<br>
            <strong>Termos:</strong> $termos<br>
            <strong>Aceito receber e-mail:</strong> $aceitoemail<br>
            <strong>Aceito receber SMS:</strong> $aceitosms<br>
            </p>";
            ?>
            <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                $uploadDir="uploads/";
                if(!file_exists($uploadDir)){
                    mkdir($uploadDir,0777,true);
                }
                $arquivoNome = $_FILES['imagem']['name'];
                $arquivoTemp = $_FILES['imagem']['tmp_name'];
                $arquivoDestino = $uploadDir . basename($arquivoNome);
                $uploadOk = 1;
                if(!empty($arquivoNome)){
                    $fileType=strtolower(pathinfo($arquivoDestino,PATHINFO_EXTENSION));
                    $allowedTypes=["jpg", "jpeg", "png"];
                    if(!in_array($fileType,$allowedTypes)){
                        echo "Apenas arquivos JPG, JPEG e PNG são permitidos.<br>";
                            $uploadOk = 0;
                    }
                    if($_FILES['imagem']['size'] > 5 * 1024 * 1024){
                        echo "O arquivo é muito grande (máximo 5MB).<br>";
                        $uploadOk = 0;
                    }
                    if($uploadOk == 1){
                        if(move_uploaded_file($arquivoTemp, $arquivoDestino)){
                            $imagemURL = $arquivoDestino;
                        }else{
                            echo "Erro ao enviar a imagem.<br>";
                            $imagemURL = "";
                        }
                        if (!empty($imagemURL)){
                            echo "<img src='$imagemURL' alt='Imagem do convite'>";
                        }

                    }
                }
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