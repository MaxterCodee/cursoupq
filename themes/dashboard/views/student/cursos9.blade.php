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
           <br><br>
            <div class="row">
                <div class="col-sm-6">
                <!-- Contenedor 1 -->
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">OEM</h1>
                <p class="lead">OEM es el acrónimo en inglés de Original Equipment Manufacturer (Fabricante de Equipamiento Original) y se refiere a las empresas que producen componentes y sistemas para su uso en la fabricación de vehículos y otros productos. Además del ensamblaje final del vehículo, las empresas OEM son responsables del diseño y desarrollo de nuevos productos y de la ingeniería constructiva y operativa de los componentes y sistemas que fabrican. Esto implica el diseño de piezas y componentes que cumplan con los requisitos de calidad, seguridad y eficiencia, así como la optimización de procesos de producción y la implementación de mejoras continuas. El éxito de las empresas OEM en la industria automotriz y otros sectores depende en gran medida de su capacidad para innovar y producir productos de alta calidad y eficiencia, y de mantener una estrecha colaboración con sus clientes para garantizar la satisfacción del usuario final.                </p>
                </div>
                <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <figure class="flex  items-center">
                    <iframe style="display: block; margin: 0 auto;" width="600" height="350" src="https://www.youtube.com/embed/E7uaHYqBgik" title="¿Qué son los proveedores y cuáles son sus tipos?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
                </div>
            </div>

              <br>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <br>
                    <img src="/assets/images/tier111.png" class="mx-auto d-block" width="90%" height="auto" alt="">
                  </figure>
                                  </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white"> TIER 1</h1>
                  <p class="lead">Los proveedores Tier 1 son aquellos que producen y suministran ensambles y componentes completos y listos para su instalación en los vehículos. Estos proveedores tienen un papel clave en la cadena de suministro de la industria automotriz, ya que son los principales responsables de la producción y suministro de los componentes que se utilizan en la fabricación de los vehículos.                  </p>
                  <p class="lead">Además de la producción de ensambles y componentes, los proveedores Tier 1 también colaboran estrechamente con los fabricantes de vehículos en el diseño e innovación de nuevos componentes y sistemas. Los proveedores Tier 1 a menudo son contratados por los fabricantes de vehículos para trabajar en proyectos de investigación y desarrollo conjuntos, lo que les permite contribuir con su conocimiento y experiencia en el diseño y desarrollo de nuevos productos.                  </p>

                </div>
              </div>


              <br><br>








              <a href="{{ url('student/cursos8') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos10') }}" class="btn btn-primary">
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



