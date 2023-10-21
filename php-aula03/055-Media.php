<!DOCTYPE html>
<html>
    <head>
        <style>
            span.cor{
                color:red;
            }
            input#voltar{
                position:relative;
                padding:10px;
                margin-top:5px;
                background-color:rgb(29, 55, 70);
                color:rgb(255, 255, 255);
                box-shadow: grey 2px 2px 2px;
                border:0px;
                font-size: 15pt;
            }
        </style>
        <link rel="stylesheet" href="_css/estilo.css"/>;
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $n1 = isset($_GET["nota1"])? $_GET["nota1"]:"Nota não informada";
                $n2 = isset($_GET["nota2"])? $_GET["nota2"]:"Nota não informada";
                $media = ($n1 + $n2) / 2;
                echo "A média entre <span class='cor'>$n1</span> e <span class='cor'>$n2</span> é igual a <span class='cor'>$media</span><br/>";
                if($media < 5){
                    $situacao = "REPROVADO";
                }
                elseif ($media >=5 && $media < 7) {
                    $situacao = "EM RECUPERAÇÃO";
                }
                else{
                    $situacao = "APROVADO";
                }
                echo "Situação do Aluno: <span class='cor'>$situacao</span><br/>";
                
            ?>
            <a href="055-Media.html"><input type="submit" value="Voltar" id="voltar"></a>
        </div>
    </body>
</html>