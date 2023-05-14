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
                <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong> INDUSTRIA AUTOMOTRIZ EN MÉXICO </strong></h1>
            </header>


            <div class="row">
              <div class="col-sm-6">
                <!-- Contenedor 1 -->
                <figure>
                  <br>
                  <iframe width="700" height="380" src="https://www.youtube.com/embed/Rn7HtQIvYJQ" title="Introducción a la industria automotriz-Querétaro en la industria automotriz" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                </div>
              <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <p class="lead"><strong> La cercanía de México con Estados Unidos</strong> es un factor clave en el crecimiento de la industria automotriz en el país. Esta ubicación geográfica permite una fácil conexión con las plantas de fabricación de automóviles y proveedores en Estados Unidos, lo que reduce significativamente los costos de transporte y logística.                  </p>
                <p class="lead">Además,<strong> la eficiencia operacional </strong>de las empresas automotrices en México es impresionante. Las empresas han implementado sistemas de gestión de calidad de acuerdo con las normas internacionales y se esfuerzan por mejorar continuamente sus procesos y controles. Esto ha llevado a un aumento en la calidad de los productos, una disminución en los tiempos de producción y una reducción en los costos de fabricación.                  </p>
                <p class="lead"><strong> La alta productividad </strong>es otro aspecto importante del crecimiento de la industria automotriz en México. La fuerza laboral mexicana es altamente calificada y tiene una gran experiencia en la producción de automóviles y piezas de automóviles. Además, las empresas han implementado tecnologías avanzadas y equipos modernos para mejorar la eficiencia y la productividad.                  </p>
              </div>
            </div>


            <br><br>



            <div class="row">
              <div class="col-sm-6">
                <!-- Contenedor 1 -->
                <p class="lead">Por último, México cuenta con una fuerza laboral altamente capacitada en <strong> habilidades técnicas </strong>relacionadas con la industria automotriz. Las universidades y escuelas técnicas en el país ofrecen programas de capacitación en ingeniería automotriz y tecnología de fabricación de automóviles, lo que ha resultado en una fuerza laboral calificada y altamente capacitada que ha ayudado a impulsar el crecimiento de la industria en el país.                  </p>
                <p class="lead">Además, <strong> México cuenta con tratados comerciales firmados con 46 países</strong>, lo que ha permitido un mayor acceso a los mercados internacionales y una mayor inversión extranjera en la industria automotriz del país. En conjunto, estos factores han llevado a un crecimiento significativo de la industria automotriz en México en los últimos años.                  </p>
              </div>
              <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <figure>
                  <img src="/assets/images/tb.png" class="mx-auto d-block" width="90%" height="auto" alt="">
                </figure>
              </div>
            </div>


            <br><br>







            <br><br>




            <a href="{{ url('student/cursos15') }}" class="btn btn-primary">
              Anterior
            </a>

            <a href="{{ url('student/cursos17') }}" class="btn btn-primary">
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



