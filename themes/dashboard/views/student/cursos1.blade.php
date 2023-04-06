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

                  <br><h1 class="text-xl font-bold text-gray-900 dark:text-white">¡Bienvenidos al curso de Introducción a la Industria Automotriz!</h1>
              </header>

              <p class="lead">Este curso está diseñado para proporcionarles una base sólida en el mundo de la industria automotriz. Durante el transcurso de este curso, exploraremos una variedad de temas, incluyendo la <strong> terminología utilizada</strong> en la industria, la <strong> clasificación de la industria automotriz</strong>, y la <strong> importancia de la industria automotriz en México, Querétaro y en la UPQ</strong>.</p>

              <br><p class="lead">Comenzaremos analizando la <strong>terminología</strong> que se utiliza en la industria automotriz, ya que es fundamental para comprender los conceptos básicos. A continuación, examinaremos la <strong>clasificación de la industria automotriz</strong>, incluyendo los diferentes tipos de vehículos y sus características. Posteriormente, profundizaremos en la <strong> importancia de la industria automotriz en México y Querétaro</strong>, y en cómo esta industria se ha convertido en un motor económico para estas regiones.             </p>

              <br><p class="lead">Finalmente, examinaremos la <strong> presencia de la industria automotriz en la UPQ</strong>, la cual tiene un fuerte compromiso en la formación de profesionales altamente capacitados en el sector automotriz.              </p>

              <br><br>

              <p class="lead"> </p>

              {{-- <figure><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="">
              </figure><br> --}}


              <a href="{{ url('student/cursos') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos2') }}" class="btn btn-primary">
                Siguiente
              </a><br><br>






    </div>
    </div>


@endsection



