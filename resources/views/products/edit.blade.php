<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>
</head>
<body>
    <form action="{{ url('products/update') }}" method="POST">
        @csrf
        <!-- campo oculto passando o ID como parâmetro no request -->
        <input type="hidden" name="id" value="{{ $product['id'] }}">
        <label>Nome:</label><br>
        <input name="name" type="text" value="{{ $product['name'] }}" /><br>
        <label>Descrição:</label><br>
        <input name="description" type="textarea" value="{{
        $product['description'] }}"/><br>
        <label>Quantidade:</label><br>
        <input name="quantity" type="number" value="{{ $product['quantity']
        }}"/><br>
        <label>Preço:</label><br>
        <input name="price" type="number" value="{{ $product['price'] }}"/><br>
        <label>Tipo:</label><br>
        <input name="type_id" type="number" value="{{ $product['type_id']
        }}"/><br>
        <input type="submit" value="Salvar" />
    </form>
</body>
</html>