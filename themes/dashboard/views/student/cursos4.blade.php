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
            <h1 class="m-0">Physics - Hub</h1>
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


  <div class="flex  items-center">
    <div class="inline-block p-2 rounded-lg bg-gray-200 mx-auto">

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
      <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">



              <br>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white" style="text-align:justify;">Choque / Colision Elastica</h1>
                  <p class="lead">Imagina que estas con tus amigos jugando billar, cada que es tu turno, al momento de pegarle a la bola blanca, esta hace colisión con las demas bolas, sin embargo
            al momento de que chocan, las bolas no se deforman, a esto se le conoce como colisión inelastica. Ahora imagina que dos automoviles impactan en la carretera y ambos se deforman,
            en una colisión donde estos cuerpos se deforman, se le conoce como colisión elastica.</p>

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
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Choque / Colision Inelastica</h1>
                  <p class="lead">Imagina que estas con tus amigos jugando billar, cada que es tu turno, al momento de pegarle a la bola blanca, esta hace colisión con las demas bolas, sin embargo
            al momento de que chocan, las bolas no se deforman, a esto se le conoce como colisión inelastica. Ahora imagina que dos automoviles impactan en la carretera y ambos se deforman,
            en una colisión donde estos cuerpos se deforman, se le conoce como colisión elastica.</p>
                </div>
              </div>
              <br><br>
              <a href="{{ url('student/cursos3') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Anterior
              </a>

              <a href="{{ url('student/cursos5') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
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



