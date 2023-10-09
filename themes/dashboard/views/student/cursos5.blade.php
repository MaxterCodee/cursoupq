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
                    <br><br>
                  <!-- Contenedor 1 -->
                  <p class="lead"><strong>2. Análisis de Modo y Efecto de Falla (FMEA)</strong>: es una técnica sistemática para identificar y evaluar los posibles modos de falla y sus efectos en un producto o proceso. El análisis <strong> FMEA ayuda a identificar los riesgos y oportunidades de mejora para prevenir problemas antes de que ocurran</strong>.                </p>
                  <br><p class="lead"><strong> El análisis FMEA se utiliza comúnmente en la industria automotriz</strong>, aeroespacial y de dispositivos médicos, así como en otras industrias que requieren una alta fiabilidad y calidad en sus productos o procesos. El análisis FMEA se lleva a cabo en equipos multidisciplinarios y se realiza en diferentes etapas del ciclo de vida del producto o proceso, desde el diseño hasta la producción y el servicio posventa. La identificación temprana de los posibles modos de falla y la implementación de medidas preventivas o correctivas adecuadas puede ayudar a reducir los costos de producción y aumentar la satisfacción del cliente. El análisis FMEA es una herramienta efectiva para mejorar la calidad y la seguridad de los productos o procesos, y para mantener la reputación de una empresa en el mercado.</p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                    <figure>
                        <img src="/assets/images/fmea.png" class="mx-auto d-block" width="65%" height="auto" alt="">
                    </figure>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                <figure>
                    <img src="/assets/images/ppap.png" class="mx-auto d-block" width="80%" height="auto" alt="">
                </figure>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <p class="lead"><strong>3. PPAP (Production Part Approval Process)</strong>: Es un proceso que se utiliza para garantizar que los productos cumplan con los requisitos del cliente antes de que se envíen al mercado. Esta herramienta incluye la validación de procesos, la verificación de la calidad del producto y la documentación necesaria para respaldar el proceso.</p>
                  <br><p class="lead"> <strong> En el sector automotriz, el PPAP es una herramienta esencial para garantizar la calidad y seguridad de los productos.</strong> Los proveedores de piezas y componentes deben cumplir con los estándares de calidad establecidos por los fabricantes de automóviles, y el PPAP se utiliza para demostrar que los productos cumplen con estos requisitos antes de que se integren en los vehículos.                  </p>

                </div>
              </div>




              <br><br>

              <a href="{{ url('student/cursos4') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
                Anterior
              </a>

              <a href="{{ url('student/cursos6') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
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



