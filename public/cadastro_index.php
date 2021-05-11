<?php
    include_once ('viacep.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="../resources//css//style.css">
    </head>
<body>
    <form action="{{../public/cadastro_index.php}}" method="POST">
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um CEP" name="cep" value="<?php echo $address->cep ?>">
        <input type="submit">
        <input type="text" placeholder="Rua" name="rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="Estado" name="estado" value="<?php echo $address->uf ?>">
    </form>
</body>

</html>
