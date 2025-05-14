<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tipo</title>
</head>
<body>
    <form action="{{ url('types/update') }}" method="POST">
        @csrf
        <!-- campo oculto passando o ID como parâmetro no request -->
        <input type="hidden" name="id" value="{{ $type['id'] }}">
        <label>Nome:</label><br>
        <input name="name" type="text" value="{{ $type['name'] }}" /><br>
        <input type="submit" value="Salvar" />
    </form>
    <a href="{{ url('/types') }}">Cancelar</a>
</body>
</html>