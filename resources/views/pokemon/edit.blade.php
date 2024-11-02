<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; 
            margin: 50px auto; 
        }
        .btn-danger {
            width: 100%; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center">Atualizar Pokémon</h2>
        <form action="{{ url('pokemon/' . $pokemon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <input type="text" name="nome" class="form-control" value="{{ $pokemon->nome }}" placeholder="Nome" required>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="tipo" class="form-control" value="{{ $pokemon->tipo }}" placeholder="Tipo" required>
            </div>
            <div class="form-group mb-3">
                <input type="number" name="pontos_de_poder" class="form-control" value="{{ $pokemon->pontos_de_poder }}" placeholder="Pontos de Poder" required min="0">
            </div>
            <button type="submit" class="btn btn-danger">Atualizar Pokémon</button>
        </form>
    </div>
</body>
</html>
