<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Exames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Lista de Exames</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/exames/create" class="btn btn-success mb-3">Cadastrar Novo Exame</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Paciente</th>
            <th>Exame ID</th>
            <th>Tipo</th>
            <th>Data de Coleta</th>
            <th>Laudo</th>
        </tr>
        </thead>
        <tbody>
        @forelse($exames as $exame)
            <tr>
                <td>{{ $exame->id }}</td>
                <td>{{ $exame->paciente }}</td>
                <td>{{ $exame->exame_id }}</td>
                <td>{{ $exame->tipo }}</td>
                <td>{{ \Carbon\Carbon::parse($exame->data_coleta)->format('d/m/Y') }}</td>
                <td>{{ $exame->laudo }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Nenhum exame cadastrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
