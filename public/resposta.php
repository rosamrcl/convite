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
                    $aceitoemail=($_POST['aceitoemail']);
                    $aceitosms=($_POST['aceitosms']);
                    $uploadDir="uploads/";
                    if (!file_exists($uploadDir)){
                        mkdir($uploadDir,0777,true);
                    }
                    $arquivoNome=$_FILES["arquivo"]["name"];
                    $arquivoTemp=$_FILES["arquivo"]["tmp_name"];
                    $arquivoDestino=$uploadDir.basename($arquivoNome);
                    $uploadOk=1;

                    if(!empty($arquivoNome)){
                        $fileType=strlower(pathinfo($arquivoDestino,PATHINFO_EXTENSION));
                        $allowedTypes=["jpg", "jpeg", "png"];
                        if(!in_array($fileType, $allowedTypes)){
                            echo "Apenas arquivos JPG, JPEG e PNG são permitidos";
                            $uploadOk=0;
                        }
                    }
                    if($_FILES["arquivo"]["sixe"]>5*1024*1024){
                        echo "O arquivo é muito grande (máximo 5MB).";
                        $uploadOk=0;
                    }
                    if($uploadOk==1){
                        if(move_uploaded_file($arquivoTemp, $arquivoTemp)){
                            $imagemURL=$arquivoDestino;
                        }else{
                            echo"Erro ao enviar a imagem.";
                            $imagemURL="";
                        }else{
                            $imagemURL="";
                        }else{
                            $imagemURL="";
                        }
                    }if(!empty($imagemURL)){
                        
                    }
                            }else{
                    header("Location:../ressources/views/convite.html");
                }              
                echo "<p>
                <strong>Evento:</strong> $evento
                <strong>Inicio:</strong> $inicio
                <strong>fim:</strong> $fim
                <strong>Tipo Evento:</strong> $tipoevento
                <strong>Descrição:</strong> $descricao
                <strong>Tema Evento:</strong> $temaevento
                <strong>Nome:</strong> $nome
                <strong>E-mail:</strong> $email
                <strong>Telefone:</strong> $telefone
                <strong>Termos:</strong> $termos
                <strong>Aceito receber e-mail:</strong> $aceitoemail
                <strong>Aceito receber SMS:</strong> $aceitosms
                </p>";
                
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