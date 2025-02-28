<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>I KAN</title>
</head>
<body>
    <body style="margin: 10%">
        <h1>Registrar un dato</h1>

        <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- token o seguridad  --}}
    
            <label  class="form-label">
                Nombre:
                <br>
                <input class="form-control" type="text" name="email"  class="form-control">
            </label>
            <br>
            <label  class="form-label">
                descripcion:
                <br>
                <input class="form-control"  type="text" name="password">
            </label>
            
            <br>
            <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
        </form>
    </body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>