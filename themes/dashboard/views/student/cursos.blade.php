@extends('layouts.student')
@section('title','Cursos')
@section('content')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Physics - Hub / Aprende Física con Nosotros</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Physics - Hub</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <body>


  <div class="flex items-center justify-center">
    <div class="w-full">
      <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
        <!-- contenido aquí -->
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert justify-end">
            <header class="mb-4 lg:mb-6 not-format">
              <br><h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Antes de comenzar</strong></h1>
            </header>
            <p class="lead">Bienvenido/a, antes de comenzar, hablaremos de ¿Qué es Physics- Hub? Es una plataforma de aprendizaje y enseñansa de la fisica con una estructura un poco diferente a las demas,
                un lugar donde podras encontrar herramientas como calculadoras y un Chat-Bot que te asistira en todo momento.       
            </p>
              <p class="lead"> </p>
              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <iframe width="600" height="350" src="https://www.youtube.com/embed/7d3Tje0bEJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div>
                      
                    </div>
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                    <figure>
                        <img src="/assets/images/fisica-2.png" class="mx-auto d-block" width="40%" height="auto" alt="">
                    </figure>
                </div>
              </div><br>
              <p class="lead" style="text-align:justify;">En este curso abordaremos y estudiaremos los principales temas basicos de Física Clasica. Aprenderemos, resolveremos problemas y resolveremos tus dudas. Una vez que comiences el curso, cada que cambies de pagina, podras ver un tema diferente,
                cada una de esas secciones incluye una breve explicación del tema, una calculadora de problemas enfocado a esa rama de la física en partizular y un asistente que te resolvera tus dudas en el momento que te surjan. 
              </strong></p>

              <br>
              <a href="{{ url('student/cursos1') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
                Siguiente
              </a>
               <br><br>

              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1><!--Utiliza este h1 para seguir ingresando texto-->

              <p class="lead"> </p>
              <p class="lead"> </p>
              <p class="lead"> </p>
              {{-- <figure><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt=""></figure><br> --}}







    </div>
    </div>
</body>


@endsection



