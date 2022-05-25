<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercao de Dados</title>
</head>
<body>
    <form enctype="multipart/form-data" action="insercao.php" method="POST">
        <fieldset>
            <legend>Local</legend>
            <p>Nome: <input type="text" name="nome" id="" placeholder="ex: AABB"></p>
            <p>Tipo de acesso: <input type="text" name="tipo_acesso" id="" placeholder="ex: gratuita"></p>
            <p>Dia de funcionamento: <input type="text" name="dia_funcionamento" id="" placeholder="ex: segunda a sexta"></p>
            <p>Horário de funcionamento: <input type="text" name="horario_funcionamento" id="" placeholder="ex: das 19:00 as 00:00"></p>
            <p>Tipo de local: <input type="text" name="" id="tipo_local" placeholder="ex: parque"></p>
            <p>Descrição: <textarea name="descricao" id="" cols="30" rows="10"></textarea></p>
        </fieldset>

        <fieldset>
            <legend>Imagem</legend>
        <p><label for="">Selecione o arquivo</label>
            <input name="arquivos" type="file"></p>

        </fieldset>

        <fieldset>
            <legend>Endereco</legend>
            <p>Cidade: <input type="text" name="" id=""></p>
            <p>Bairro: <input type="text" name="" id=""></p>
            <p>Rua: <input type="text" name="" id=""></p>
            <p>Numero: <input type="text" name="" id=""></p>
            <p>Referência: <input type="text" name="" id=""></p>
        </fieldset>

        <fieldset>
            <legend>Serviços</legend>
            <p>Nome: <input type="text" name="" id=""></p>
            <p>Preco: <input type="number" name="" id=""></p>
        </fieldset>
            <p><input type="submit" value="Salvar"></p>

    </form>
</body>
</html>