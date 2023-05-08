<?php
setlocale(LC_TIME, 'es_ES.utf8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script type="text/javascript">
        BASE_URL="<?php echo url('') ?>"
    </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title')</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <style>

        .contenedor {
        display: flex;
        background-image: url('/assets/images/diploma.png');
        background-size: cover;
        background-position: center;
        height: 100vh; /* establece la altura del contenedor en el alto de la ventana del navegador */
        }

        .centrado {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.5); /* agrega un color de fondo semi-transparente al contenido centrado */
        padding: 20px;
        }
        .lol {
        text-align: justify;
        }



  </style>
</head>

<body>


	<!-- Agregamos los scripts de Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <div class="contenedor">



        <div class="container">
            <div class="row">
                <div class="col-sm-14">
                    <div class="">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-20">
                                    {{-- <h1 class="display-4"><strong> <img src="{{ url('assets/images/Group22.svg')}}" alt="" style="width: 17%; height: auto;"> Universidad Politécnica de Querétaro</strong></h1> --}}
                                    {{-- <h1 class="display-5 text-center"><strong> Diploma de finalización de curso <br> "Introducción a la Industria Automotriz"</strong></h1> --}}
                                    <br>
                                    {{-- <h1 class="display-6 text-center">Instructor:  Dr. Juan Manuel García Guendulain</h1> --}}
                                   <br><br><br><br>
                                    <h1 class="display-5 text-center">ㅤㅤ ¡FELICIDADES!</h1>
                                    <br><br>
                                    <h1 class="display-3 text-center"><strong>ㅤ {{ $student_info->name}}</strong></h1>
                                    <br><br>
                                    <h1 class="text-center h2">ㅤㅤ ha concluido satisfactoriamente el curso de <br>ㅤㅤ "Introducción a la Industria Automotriz" </h1>
                                    <br>
                                    <br>
                                    <h1 class="display-6 text-center">ㅤㅤ Fecha: {{ strftime('%e de %B de %Y', strtotime($exam_info->exam_date)) }} </h1>
                                    <h5></h5>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div><br>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




    </div>

<br><br><br>
    <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <!-- Contenido del div centrado -->
            <a href="{{ route('student.descargar-pdf') }}" class="btn btn-primary">Descargar PDF</a>
        </div>
        </div>
      </div>
<br><br><br>



</body>
