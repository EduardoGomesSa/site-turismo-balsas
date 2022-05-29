<?php
    require_once '../_insercao/conexao.php';

    $select = "SELECT path FROM imagem WHERE id_local = 8;";
    $select2 = "SELECT cidade FROM endereco WHERE id_local = 8;";
    $con = $mysqli -> query($select) || die($mysqli -> error); 
    $con2 = $mysqli -> query($select2) || die($mysqli -> error); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AABB</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <link rel="stylesheet" href="../_css/paginas.css">
    <link rel="stylesheet" href="../_css/cabecalho.css">
    <link rel="stylesheet" href="../_css/rodape.css">
</head>
<body>
    <main>
        <?php require_once "../_issets/cabecalhopontos.php" ?>
        <article>
            <section class="imagem-principal">
                <img src="../_insercao/<?php echo $con; ?>" alt="foto expositiva do local">
            </section>
            
            <section class="nomeLocal">
                <h1>AABB</h1>
                <p><?php if($con2 != '') echo $con2; ?></p>
            </section>

            <section class="texto-principal">
                <p>Balsas é uma cidade em franco desenvolvimento. Situada a 800km da 
                    capital São Luís, é reconhecidamente um dos municípios mais 
                    importantes do Maranhão. Mais do que pela sua economia, 
                    impulsionada por uma forte indústria de grãos, a cidade tem uma 
                    localização privilegiada, sendo o epicentro do ecoturismo no sul do 
                    estado</p>
                
                <p>Saiba mais em <a href="http://www.balsas.ma.gov.br" target="_blank" rel="noreferrer noopener">www.balsas.ma.gov.br</a></p>
            </section>
            <hr>
            <section class="detalhes">
                <div><img src="../_imagem/iconLocation.png" alt="icon de referencia">Referencia</div>
                <div><img src="../_imagem/iconTicket.png" alt="icon de ingresso"> Entrada</div>
            </section>
        </article>
        <?php require_once "../_issets/rodape.php" ?>
    </main>
</body>
</html>