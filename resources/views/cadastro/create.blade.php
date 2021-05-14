<?php
    include_once ('viacep.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro</title>
        <link rel="stylesheet" href="./css//style.css">
    </head>
<body>
    <form action="{{route('resgistrar_cadastro')}}" method="POST">
        @csrf
        <input type="text" placeholder="Digite seu Nome Completo" name="nome">
        <input type="email" placeholder="Digite seu E-mail" name="mail">
        <input type="email" placeholder="Confirme seu E-mail" name="confirmeEmail">
        <input type="text" placeholder="Digite seu CPF" name="cpf">
        <p>Escolha sua Identidade de Gênero</p>
        <select name="identidade" id="">
            <option value="vazio"></option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="transgenero">Transgênero</option>
            <option value="generobinario">Gênero não-Binário</option>
            <option value="agenero">Agênero</option>
        </select>
        <p>Escolha o seu Perfil:</p>
        <select name="perfil" id="">
            <option value="vazio"></option>
            <option value="estudante">Estudante</option>
            <option value="professor">Professor(a)</option>
        </select>
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um CEP" name="cep" value="<?php echo $address->cep ?>">
        <input type="submit">
        <input type="text" placeholder="Rua" name="rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="Complemento" name="complemento">
        <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="Estado" name="estado" value="<?php echo $address->uf ?>">
        <button>Salvar</button>
    </form>
</body>

</html>
