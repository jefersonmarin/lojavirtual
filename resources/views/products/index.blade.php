<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <h3>Lista de produtos</h3>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name']}}</li>
            <a href="{{ url('/products/update', ['id' => $product->id]) }}">Editar</a>
        @endforeach
    </ul>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ url('/products/new') }}">Adicionar produto</a>
</body>
</html>