<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Crear post</title>
</head>

<body style="background-color: #ffffff;">
    @extends('admin.layouts.app')
    @section('content')
        <center>
            <h1 style="background-color: rgb(220, 220, 220); color:rgb(77, 77, 77)">Registra Outfit en Post</h1>
            {{-- <a href="{{ route('post.listardos') }}" class="btn btn-success " style="backgrand-color:red;">Lista Outfit</a> home.home nombre de la ruta --}}
            <div style=" display:flex; padding-bottom:400px; justify-content:center;  ">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf {{-- token o seguridad  --}}
                    <label class="form-label ">
                        <h4>Nombre tienda</h4>
                        <input class="form-control" type="text" style="width: 300px" name="nombre" class="form-control">
                    </label>

                    <label class="form-label">
                        <h4>Tipo</h4>
                        <input class="form-control" type="text" style="width: 300px" name="tipo" class="form-control">
                    </label>
                    <br><br>
                    <label class="form-label">
                        <h4>Link accesorios</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="descrip1">
                    </label>

                    <label class="form-label">
                        <h4>Link prenda superior</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="descrip2">
                    </label>
                    <br>
                    <label class="form-label">
                        <h4>Link prenda inferior</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="descrip3">
                    </label>

                    <label class="form-label">
                        <h4>Link calzado</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="descrip4">
                    </label>
                    <br><br>
                    <label class="form-label">
                        <h4>Informacion</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="info">
                    </label>

                    <label class="form-label">
                        <h4>Ubicacion</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="ubica">
                    </label>

                    <div class="form-group">
                        <label for="image">
                            <h4>Foto modelo</h4>
                        </label>
                        <br>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>

                </form>
            </div>
        </center>
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
