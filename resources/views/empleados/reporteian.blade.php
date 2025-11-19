<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Animales</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { padding: 10px; text-align: center; border: 1px solid #ddd; }
        img { border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Reporte de Animales</h1>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clave (IDA)</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($animales as $animal)
                <tr>
                    <td>{{ $animal->ida }}</td>
                    
                    <td>
                        <img src="{{ asset('imagenes/' . $animal->foto) }}" alt="{{ $animal->nombre }}" width="50" height="50">
                    </td>
                    
                    <td>{{ $animal->nombre }}</td>
                    
                    <td>
                        {{ $animal->especie ? $animal->especie->nombre : 'Sin especie' }}
                    </td>
                    
                    <td>
                        <form action="{{ route('animal.destroy', $animal->ida) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar a {{ $animal->nombre }}?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No hay animales registrados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>