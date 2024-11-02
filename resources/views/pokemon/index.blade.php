<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <a href="{{ url('pokemon/criar') }}" class="btn btn-danger text-white">
                Adicionar Novo Pokémon ao time
            </a>
        </div>
        <div class="row justify-content-center">
            @foreach($pokemons as $pokemon)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="border border-2 rounded p-3 bg-white text-center shadow-sm">
                        <h3>{{ $pokemon->nome }}</h3>
                        <p>Tipo: {{ $pokemon->tipo }}</p>
                        <p>Pontos de Poder: {{ $pokemon->pontos_de_poder }} Pontos de Poder</p>

                        <form action="{{ url('pokemon/'.$pokemon->id.'/editar') }}" method="GET" style="display:inline;">
                            <button class="btn btn-danger" type="submit">Editar</button>
                        </form>
                        
                        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>