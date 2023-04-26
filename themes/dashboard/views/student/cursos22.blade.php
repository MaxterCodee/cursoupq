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
            <br><div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Aliados estratégicos</h1>
                  <p class="lead">La Universidad Politécnica de Querétaro se beneficia de la colaboración con diferentes aliados estratégicos que contribuyen al desarrollo de la institución y al fortalecimiento de su oferta académica. Uno de estos aliados es el <strong> Automotive Cluster</strong>, una organización que agrupa a empresas del sector automotriz en el estado de Querétaro y que trabaja en conjunto con la universidad para ofrecer programas de formación y capacitación especializados en esta área.                  </p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                    <img src="/assets/images/ac.png" class="mx-auto d-block" width="80%" height="auto" alt="">
                  </figure>
                </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <img src="/assets/images/imt.png" class="mx-auto d-block" width="72%" height="auto" alt="">
                  </figure>
                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->

                  <p class="lead">Otro aliado importante es el <strong> Instituto Mexicano del Transporte</strong>, una organización gubernamental que tiene como objetivo promover el desarrollo tecnológico y la innovación en el sector del transporte en México. La colaboración con esta institución permite a la universidad mantenerse actualizada en las últimas tendencias y avances en esta área.                  </p>

                </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <p class="lead">Además, la universidad cuenta con el apoyo de organizaciones como <strong> Vórtice IT Cluster Querétaro</strong>, una agrupación de empresas del sector de tecnologías de la información que fomenta la colaboración y el intercambio de conocimientos entre sus miembros. También cuenta con la colaboración de empresas como Brose Excellesnse in Mechatronics y Autoliv, que ofrecen programas de formación y prácticas profesionales para los estudiantes de la universidad.                  </p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                    <figure>
                        <br>
                        <img src="/assets/images/vortice.jpg" class="mx-auto d-block" width="90%" height="auto" alt="">
                    </figure>
                </div>
              </div>

              <br><br>






              <br><br>




              <a href="{{ url('student/cursos21') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos23') }}" class="btn btn-primary">
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



