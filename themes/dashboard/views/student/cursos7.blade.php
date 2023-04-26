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

            <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <br><br><p class="lead"><strong> Control Plan: Es una herramienta utilizada para planificar y documentar los controles necesarios para garantizar la calidad del producto o proceso.</strong> Esta herramienta identifica los puntos críticos del proceso y establece los procedimientos necesarios para garantizar la calidad del producto.</p>
                  <p class="lead">Además, el Control Plan también se utiliza para establecer responsabilidades y definir los recursos necesarios para implementar y mantener los controles de calidad en el proceso. La herramienta incluye una lista de verificación de los pasos críticos, los límites de control, los criterios de aceptación y rechazo, así como los planes de contingencia en caso de que se presente algún problema en el proceso. Con el Control Plan, se puede garantizar que los productos cumplen con los estándares de calidad y que el proceso de producción se encuentra bajo control. De esta manera, se reduce el riesgo de producir productos defectuosos y se asegura la satisfacción del cliente.</p>
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <br><figure>
                    <img src="/assets/images/pc.jpg" class="mx-auto d-block" width="90%" height="auto" alt="">
                </figure>


                </div>
              </div>


              <br><br>



              <a href="{{ url('student/cursos6') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos8') }}" class="btn btn-primary">
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



