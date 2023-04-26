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



              <br>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">¿Qué son las "Core Tools"?</h1><br>
                  <p class="lead"><strong> Las Core Tools</strong>, o Herramientas Básicas de la Calidad, son un conjunto de técnicas y metodologías utilizadas en la gestión de la calidad en la industria manufacturera. Las <strong> Core Tools incluyen seis herramientas principales</strong> que ayudan a garantizar la calidad y eficiencia en los procesos de producción. <strong> Estas herramientas son ampliamente utilizadas en la industria automotriz</strong> y también se aplican en otros sectores como la ingeniería, la gestión de proyectos y la gestión empresarial en general. <strong> Las Core Tools permiten identificar los riesgos, prevenir problemas y mejorar los procesos para producir productos de alta calidad de manera consistente.</strong> La utilización de estas herramientas ayuda a las empresas a cumplir con los requisitos del cliente y a mejorar su reputación en el mercado.                  </p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                    <img src="/assets/images/auto21.png" class="mx-auto d-block" width="70%" height="auto" alt="">
                  </figure>
                </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <img src="/assets/images/apqp.jpg" class="mx-auto d-block" width="67%" height="auto" alt="">
                  </figure>
                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->

                  <p class="lead">1. <strong> Planificación avanzada de la calidad del producto (APQP)</strong>: es un proceso estructurado utilizado para desarrollar y lanzar nuevos productos o procesos. APQP es una herramienta utilizada para planificar, definir y documentar los requisitos del cliente y los objetivos del producto, identificar riesgos y establecer planes de acción.</p>
                  <br><p class="lead"><strong> APQP</strong> también es una herramienta utilizada para establecer los procesos necesarios para garantizar que los productos o procesos cumplan con los requisitos legales y reglamentarios aplicables. <strong> Este proceso se divide en cinco fases</strong>: planificación y definición del programa, diseño y desarrollo del producto, diseño y desarrollo del proceso, validación del producto y del proceso, y lanzamiento del producto. <strong> APQP es una herramienta eficaz para garantizar que los productos o procesos se desarrollen y lancen en tiempo y forma</strong>, y que cumplan con los requisitos de calidad y seguridad necesarios.</p>


                </div>
              </div>


              <br><br>






              <a href="{{ url('student/cursos3') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos5') }}" class="btn btn-primary">
                Siguiente
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



