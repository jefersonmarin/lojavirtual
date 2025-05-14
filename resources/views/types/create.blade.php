<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tipo</title>
</head>
<body>
    <form action="{{ url('types/new') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input name="name" type="text" /><br>
        <input type="submit" value="Salvar" />
    </form>
    <a href="{{ url('/types') }}">Voltar</a>
</body>
</html>