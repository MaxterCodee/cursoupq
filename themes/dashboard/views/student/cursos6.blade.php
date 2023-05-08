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
                  <br><br>  <p class="lead"> <strong>4. MSA (Measurement System Analysis): </strong>Es una herramienta utilizada para evaluar la precisión y la capacidad del sistema de medición utilizado en el proceso de producción. Esta herramienta ayuda a garantizar la precisión y la consistencia de los datos de medición.                  </p>
                  <p class="lead"> <strong> En el sector industrial, la herramienta MSA (Measurement System Analysis) es fundamental para asegurar la precisión y la capacidad del sistema de medición utilizado en el proceso de producción.</strong> La herramienta MSA ayuda a evaluar y mejorar la precisión y la consistencia de los datos de medición, lo que resulta esencial para garantizar la calidad de los productos.                  </p>
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                   <br><figure>
                        <img src="/assets/images/msa.png" class="mx-auto d-block" width="50%" height="auto" alt="">
                    </figure>
                </div>
              </div>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                    <br><figure>
                        <br>
                        <iframe width="650" height="380" src="https://www.youtube.com/embed/9op4ic-3J4E" title="Anticípate a los problemas de calidad con el SPC" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    </figure>
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                 <br><br> <p class="lead"><strong> 5. SPC (Statistical Process Control):</strong> Es una herramienta utilizada para monitorear y controlar la calidad de un proceso de producción. Esta herramienta utiliza técnicas estadísticas para medir y controlar la variabilidad del proceso.                  </p>
                 <p class="lead">El SPC <strong> es una herramienta que utiliza técnicas estadísticas para medir y controlar la variabilidad del proceso de producción</strong>. La herramienta se utiliza para monitorear y controlar la calidad de un proceso de producción en tiempo real, lo que permite a los fabricantes detectar rápidamente problemas de calidad y tomar medidas para solucionarlos.                 </p>
                 <p class="lead"><strong> En la industria automotriz, por ejemplo, el SPC se utiliza para monitorear y controlar la calidad de los productos durante todo el proceso de producción, desde la materia prima hasta el producto</strong>                 </p>

                </div>
              </div>




              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                </div>

                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                </div>
              </div>

              <br><br>




              <a href="{{ url('student/cursos5') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos7') }}" class="btn btn-primary">
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



