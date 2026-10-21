
<?php

// Verifica se o formulario foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulario
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    // Mostra os dados cadastrados
    echo "<h2>Produto cadastrado!</h2>";

    echo "Nome: " . $nome . "<br>";
    echo "Preco: R$ " . $preco . "<br>";
    echo "Quantidade: " . $quantidade . "<br>";

}

?>

<h2>Cadastro de Produtos</h2>

<form>

    Nome do produto:
    <input type="text" name="nome" >
    <br><br>

    Preco:
    <input type="number" name="preco">
    <br><br>

    Quantidade:
    <input type="number" name="quantidade">
    <br><br>

    <button type="submit">Cadastrar produto</button>

</form>
