<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear formulario</h1>

    <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
            <br>
        </label>
        <br>
        <label>
            descripcion:
            <br>
            <input type="text" name="descripcion">
            <br>
        </label>
       
        <br>
        <label >Adjuntar archivo PDF</label>
        <br>
        <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
       
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>