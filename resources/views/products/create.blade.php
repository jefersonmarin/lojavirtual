<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('products/new') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input name="name" type="text" /><br>
        <label>Descrição:</label><br>
        <input name="description" type="textarea" /><br>
        <label>Quantidade:</label><br>
        <input name="quantity" type="number" /><br>
        <label>Preço:</label><br>
        <input name="price" type="number" /><br>
        <label>Tipo:</label><br>
        <input name="type_id" type="number" /><br>
        <input type="submit" value="Salvar" />
    </form>
    <a href="{{ url('/products') }}">Voltar</a>
</body>
</html>