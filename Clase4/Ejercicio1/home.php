<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulario en php</title>
</head>

<body>

    <form action="blog.php" method="post">
        <div class="col-auto">
            <label for="email" class="visually-hidden">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Destinatario">
        </div>
        <div class="col-auto">
            <label for="titulo" class="visually-hidden">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
        </div>
        <div  class="col-auto">
            <label for="Contenido" class="form-label">contenido</label>
            <textarea class="form-control" name="Contenido" id="Contenido" rows="3"></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
    </form>

</body>

</html>