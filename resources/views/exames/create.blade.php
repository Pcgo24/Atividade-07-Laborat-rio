<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Exame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Exame</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/exames') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Paciente:</label>
            <input type="text" name="paciente" value="{{ old('paciente') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Número do Exame:</label>
            <input type="text" name="exame_id" value="{{ old('exame_id') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo de Exame:</label>
            <select name="tipo" class="form-select">
                <option value="">Selecione</option>
                <option value="Sequenciamento" {{ old('tipo') == 'Sequenciamento' ? 'selected' : '' }}>Sequenciamento</option>
                <option value="PCR" {{ old('tipo') == 'PCR' ? 'selected' : '' }}>PCR</option>
                <option value="Microarray" {{ old('tipo') == 'Microarray' ? 'selected' : '' }}>Microarray</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Coleta:</label>
            <input type="date" name="data_coleta" value="{{ old('data_coleta') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Laudo (opcional):</label>
            <textarea name="laudo" rows="4" class="form-control">{{ old('laudo') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="/exames" class="btn btn-secondary">Voltar</a>
    </form>
</div>

</body>
</html>
