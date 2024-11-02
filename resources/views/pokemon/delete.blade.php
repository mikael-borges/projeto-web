<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<form action="{{ url('pokemon/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar Pokemon</button>
</form>