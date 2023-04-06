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
            <h1 class="m-0">Curso de Introducción a la Industria Automotriz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Curso de Introducción a la Industria Automotriz</li>
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
              <br><h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong> Antes de empezar</strong></h1>
            </header>




              <p class="lead">Bienvenido/a, antes de empezar, hablaremos sobre la Universidad Politécnica de Querétaro (UPQ) y su enfoque en la industria automotriz. <strong> ¿Sabías que la UPQ es la única universidad en México con acento automotriz?</strong> Esta institución educativa ha desarrollado un programa educativo especializado en el campo de la ingeniería automotriz, con el objetivo de formar profesionales altamente capacitados en esta área.            </p>









              <p class="lead"> </p>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <br><br><br><iframe width="750" height="450" src="https://www.youtube.com/embed/tPoSQS3FMtg" title="UPQ - La universidad automotriz de México" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                    <figure>
                        <img src="/assets/images/polo1.png" class="mx-auto d-block" width="60%" height="auto" alt="">
                    </figure>
                </div>
              </div>




              <p class="lead">En este curso abordaremos algunas preguntas importantes sobre la industria automotriz y su relación con la Universidad Politécnica de Querétaro (UPQ). <strong> ¿Cuál es la importancia de la industria automotriz en México y en Querétaro? ¿Qué son las OEM y las Tier 1 en la industria automotriz?, Aproximadamente ¿cuántos componentes tiene un vehículo?.</strong></p>
              <br><p class="lead"><strong> Esperamos que este curso sea informativo y ayude a comprender la relevancia de la industria automotriz y la especialización de la UPQ en este campo.</strong></p>

              <br><br>
              <a href="{{ url('student/cursos1') }}" class="btn btn-primary">
                Siguiente
              </a>

                            <br><br>

              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>

              <p class="lead"> </p>
              <p class="lead"> </p>
              <p class="lead"> </p>
              {{-- <figure><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt=""></figure><br> --}}







    </div>
    </div>
</body>


@endsection



