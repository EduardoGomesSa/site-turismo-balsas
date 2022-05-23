<?php

include_once("conexao.php");

    if(isset($_FILES) && count($_FILES) > 0){
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";
        die();
    }
    
    if(isset($_FILES["arquivos"])){
        //echo "Arquivo enviado";
        $arquivo = $_FILES["arquivos"];
        if($arquivo["error"])
            die("Falha ao enviar arquivo");
        if($arquivo["size"]>2097152)
            die("arquivo muito grande! máximo 2MB");
        
        $pasta = "_arquivos/";
        $nomeDoArquivo = $arquivo["name"];
        $novoNomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != "png")
            die("Tipo de arquivo não aceito");
        
        $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
        if($deu_certo){
            $mysqli -> query("INSERT INTO imagem (nome, path) VALUES ('$nomeDoArquivo','$path')") or die($mysqli->error); 
            echo "<p>Arquivo enviado com sucesso! </p>";
        }else
            echo "Falha ao enviar arquivo";
    }

    $sql_query = $mysqli-> query("SELECT * FROM imagem") or die($mysqli->error);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <th>Preview</th>
                <th>Arquivo</th>
            </thead>
            <tbody>
                <?php
                while($arquivo = $sql_query -> fetch_assoc()){
                ?>
                <tr>
                    <td><img height="50" src="<?php echo $arquivo["path"]; ?>"></td>
                    <td><?php echo $arquivo["nome"]; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
    </html>