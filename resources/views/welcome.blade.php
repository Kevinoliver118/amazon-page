
  @vite('resources/css/Global-Styles/navbar.css')
  @vite('resources/css/Global-Styles/portada.css')
  @vite('resources/css/Global-Styles/pie-pagina.css')
  @vite('resources/css/Pages/welcome/intro-section.css')

  <title>HOME</title>

<body>
@include('ComponentesBase.navbar')
<div class="portada">
    <img src="https://www.shutterstock.com/image-photo/view-drone-on-gocta-falls-600nw-2358934563.jpg" alt="Descripción de la imagen">
    <h1 class="texto">
    <span class="arriba">Es momento de</span>
    <span class="abajo">VIAJAR A LA AMAZONAS</span>
    </h1>
    <button src="{{route('paquetes')}}" class="btn">Ver mas tours</button>
    </div>
  <div>
    @include('PagesComponents.WelcomePage.intro-section')
    @include('PagesComponents.WelcomePage.cusco-explorations')
    @include('PagesComponents.WelcomePage.destination-highlight')
    @include('PagesComponents.WelcomePage.criticas')
  </div>
@include('ComponentesBase.pie-pagina')
</body>