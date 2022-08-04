<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Generador PDF</title>
    <!-- CSS only -->

</head>
<body>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr class="font-weight-bold ">
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Raza</th>
                <th scope="col">Categoria</th>
                <th scope="col">Genero</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotasvar as $masco)
                <tr>
                    <th>{{ $masco->id }}</th>
                    <th>{{ $masco->nombre_mascota }}</th>
                    <th>{{ $masco->raza_mascota }}</th>
                    <th>{{ $masco->categoria_mascota }}</th>
                    <th>{{ $masco->genero_mascota }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

{{--  
Instalar la libreria DOMPDF
composer require barryvdh/laravel-dompdf

Editamos config\app aliases line 212
'PDF'=>Barryvdh\DomPDF\Facade::class,

y agregamos el use PDF al controlador --}}