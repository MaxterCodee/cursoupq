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
                <br><br>
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">Normas de calidad automotríz</h1>
                    <p class="lead"><strong> ISO 9001</strong> es una norma internacional que establece los requisitos para un sistema de gestión de la calidad en una organización. Esta norma se enfoca en mejorar la satisfacción del cliente y la eficiencia operativa de la empresa a través de la implementación de procesos y controles de calidad efectivos.                        </p>
                    <p class="lead"><strong> ISO 19011</strong> es una norma que establece los principios y directrices para la auditoría de sistemas de gestión de calidad y medio ambiente. Esta norma proporciona orientación sobre cómo planificar, realizar y gestionar auditorías internas y externas en una organización.                        </p>
                    <p class="lead"><strong> IATF 16949</strong> es una norma internacional desarrollada por la industria automotriz para el sistema de gestión de calidad en esta industria. Esta norma se basa en la norma <strong> ISO 9001 </strong>y establece requisitos específicos adicionales para la gestión de la calidad en la industria automotriz. La <strong> IATF 16949 </strong>se utiliza como un estándar para la certificación de sistemas de gestión de calidad en la cadena de suministro de la industria automotriz.                        </p>
                </div>
                <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <figure>
                    <br><br>
                    <img src="/assets/images/nca.jpg" class="mx-auto d-block" width="60%" height="auto" alt="">
                </figure>
                </div>
            </div>
              <br><br>




              <a href="{{ url('student/cursos14') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos16') }}" class="btn btn-primary">
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



