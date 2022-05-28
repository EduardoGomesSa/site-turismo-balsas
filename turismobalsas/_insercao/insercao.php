<?php
    include_once("conexao.php");

    //inserção dos locais
    $nome = $_POST['nome'];
    $tipoAcesso = $_POST['tipo_acesso'];
    $dataFuncionamento = $_POST['dia_funcionamento']; 
    $horarioFuncionamento = $_POST['horario_funcionamento'];
    $tipoLocal = $_POST['tipo_local'];
    $descricao = $_POST['descricao'];

    $mysqli -> query("INSERT INTO Local (nome, descricao_local, tipo_acesso, data_funcionamento, horario_funcionamento, tipo_local)
    VALUES ('$nome', '$descricao', '$tipoAcesso', '$dataFuncionamento', '$horarioFuncionamento', '$tipoLocal');");
    $id = mysqli_insert_id($mysqli);

    //inserção de serviços
    $nomeServico = $_POST['nomeServico'];
    $preco = $_POST['preco'];

    $mysqli -> query("INSERT INTO servico (nomeServico, valor, id_local) VALUES ('$nomeServico', '$preco', '$id')");

    //inserção do endereço
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $referencia = $_POST['referencia'];

    $mysqli -> query("INSERT INTO endereco (cidade, referencia, bairro, rua, numero, id_local)
    VALUES ('$cidade', '$referencia', '$bairro', '$rua', '$numero', '$id');");

    //inserção das imagens
    if(isset($_FILES["arquivos"])){
        //echo "Arquivo enviado";
        $arquivo = $_FILES["arquivos"];
        if($arquivo["error"])
            die("Falha ao enviar arquivo PARTE 1");
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
            $mysqli -> query("INSERT INTO imagem (nome, path, id_local) VALUES ('$nomeDoArquivo','$path','$id')") or die($mysqli->error); 
            
            echo "<p>Arquivo enviado com sucesso! </p>";
        }else
            echo "Falha ao enviar arquivo ao MySQL";
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