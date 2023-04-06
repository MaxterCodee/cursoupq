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
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong> INDUSTRIA AUTOMOTRIZ EN QUERÉTARO </strong></h1>
              </header>


              <br>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <iframe width="750" height="420" src="https://www.youtube.com/embed/95CQXR0eFnY" title="Querétaro importante fabricante automotriz" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                  </figure>
                                  </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <br>
                  <p class="lead">La industria automotriz en Querétaro <strong> es uno de los sectores más importantes para la economía del estado</strong>. Se destaca por ser el sector que genera más puestos de trabajo, con <strong> más de 70,000 empleos en toda la cadena de valor</strong>. Esto se debe a la presencia de numerosas empresas de gran envergadura que se han establecido en la entidad en las últimas décadas.                  </p>
                  <p class="lead">Asimismo, la industria automotriz de Querétaro representa una importante contribución a las exportaciones del estado. Se estima que el sector <strong> representa el 28.5% de las exportaciones totales de Querétaro</strong>, lo que demuestra su importancia como fuente de ingresos para la entidad.                  </p>
                  <p class="lead">En cuanto a la producción de vehículos, <strong> Querétaro cuenta con cuatro plantas ensambladoras de camiones y una de tractores</strong>. Esto ha permitido a la entidad consolidarse como un importante polo de producción de vehículos comerciales en México.                  </p>

                </div>
              </div>


              <br><br>



              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">SUBTEMA AQUI</h1><br>
                  <p class="lead">Además, la industria automotriz de Querétaro se caracteriza por contar con una amplia red de proveedores. Actualmente, <strong> existen en la entidad 104 proveedores Tier 1 y más de 200 proveedores Tier 2</strong>, lo que demuestra la presencia de una cadena de suministro robusta y especializada.                  </p>
                  <p class="lead">En resumen, la industria automotriz en Querétaro es un sector clave para la economía del estado, ya que genera una importante cantidad de empleos y representa una contribución significativa a las exportaciones. La presencia de plantas ensambladoras y una amplia red de proveedores demuestran la importancia de esta industria en la región.                  </p>
                  <p class="lead"></p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                    <img src="/assets/images/qroo.png" class="mx-auto d-block" width="75%" height="auto" alt="">
                  </figure>
                </div>
              </div>


              <br><br>



              <h1 class="text-xl font-bold text-gray-900 dark:text-white">DATO CURIOSO</h1>




              <figure>
                <img src="/assets/images/dato.png" class="mx-auto d-block" width="72%" height="auto" alt="">
              </figure>





              <br><br>




              <a href="{{ url('student/cursos4') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos6') }}" class="btn btn-primary">
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



