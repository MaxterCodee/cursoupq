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


  <div class="flex  items-center">
    <div class="inline-block p-2 rounded-lg bg-gray-200 mx-auto">

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
      <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <br>
                <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>  PARA CONCLUIR </strong></h1>
            </header>


            <br>

            <div class="row">
              <div class="col-sm-6">
                <!-- Contenedor 1 -->
                <figure>
                  <img src="/assets/images/auto2.jpeg" class="mx-auto d-block" width="75%" height="auto" alt="">
                </figure>
                                </div>
              <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <p class="lead"><strong><br> El curso aborda una serie de temas relacionados con la industria automotriz, que incluyen la clasificación de proveedores en TIER 1, TIER 2 y TIER 3, así como la definición de OEM's (Original Equipment Manufacturers) y su ubicación geográfica. También se destaca la importancia de la industria automotriz en México y en Querétaro, y cómo esta región se ha convertido en un aliado estratégico para la industria automotriz en el país.</strong>                  </p>
                <p class="lead"> <strong> Además, el curso explora el acento automotriz en Querétaro y cómo este ha influido en el crecimiento de la industria en la región. Se pueden discutir otros temas relacionados con la industria automotriz, como las tendencias actuales en tecnología automotriz, la sostenibilidad y las emisiones, la seguridad vehicular y la cadena de suministro global.       </strong>           </p>
              </div>
            </div>


            <br><br>



            <div class="row">
              <div class="col-sm-6">
                <!-- Contenedor 1 -->
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">Aplicación de Examen</h1><br>
              </div>
              <div class="col-sm-6">
                <!-- Contenedor 2 -->






              </div>
            </div>
              <br><br>




              <a href="{{ url('student/cursos7') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/dashboard') }}" class="btn btn-primary">
                Terminar
              </a>
              <br><br>


              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>

              <p class="lead"> </p>
              <p class="lead"> </p>
              <p class="lead"> </p>


    </div>
    </div>


@endsection



