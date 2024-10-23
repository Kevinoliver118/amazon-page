<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/Global-Styles/navbar.css')
    @vite('resources/css/Global-Styles/portada.css')
    @vite('resources/css/Global-Styles/pie-pagina.css')
    <title>Paquetes</title>
</head>
<body>
    @include('ComponentesBase.navbar')
    <div class="portada">
    <img src="https://www.amazontoursperu.com/img/amazon-tours-peru-46.jpg" alt="Descripción de la imagen">
    <h1 class="texto">
    <span class="arriba">Es momento de</span>
    <span class="abajo">VIAJAR A LA AMAZONAS</span>
    </h1>
    <button src="{{route('paquetes')}}" class="btn">Ver mas tours</button>
    </div>
    @include('ComponentesBase.pie-pagina')
</body>
</html>