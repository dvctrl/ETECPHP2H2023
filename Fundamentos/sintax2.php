<!DOCTYPE html>
<html>
    <?php
        #testando comentario hask mark
    ?>
<head>    
    <meta charset="utf-8">
    <title>PHP - Testando Comentarios</title>
</head>
<body>
    <?php
        /* este é um
        comentario de 
        multiplas linhas
        */

        echo "Segundo exemplo de PHP";
        $data = "20 de agosto de 2023";
    ?>
    
    <p>este paragrafo será interpretado como html</p>
    Arquivo criado em <?php echo $data; ?>
</body>
</html>