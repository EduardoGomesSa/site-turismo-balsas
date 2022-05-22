<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercao de Dados</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Local</legend>
            <p>Nome: <input type="text" name="" id=""></p>
            <p>Tipo de acesso: <input type="text" name="" id=""></p>
            <p>Dia de funcionamento: <input type="text" name="" id=""></p>
            <p>Horário de funcionamento: <input type="text" name="" id=""></p>
            <p>Tipo de local: <input type="text" name="" id=""></p>
            <p>Descrição: <textarea name="" id="" cols="30" rows="10"></textarea></p>
        </fieldset>

        <fieldset>
            <legend>Imagem</legend>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <div><input name="imagem" type="file"/></div>
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