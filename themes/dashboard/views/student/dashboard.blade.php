@extends('layouts.student')
@section('title','Portal dashboard')
@section('content')
<style>
  .breadcrumb-item{
    color:color:#030d4f;
  }
</style>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Panel Principal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item" style="color:#030d4f;"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.content-header -->
    <section class="content">
    <div class="col-lg-6 col-6">
        <div class="small-box bg-info">
            <div class="inner" style="background:#44749d; color:white;">
            <h3>Curso</h3>

            <p>Curso de Introducción a la Fisica Clasica</p>
            <p>Estatus: En curso</p>
            </div>
            <div class="icon" style="background:#44749d;">
            <i class="ion ion-bag"></i>
            </div>

                <a href="{{ url('student/cursos')}}" class="small-box-footer" style="background:#44749d">Aplicar<i class="fas fa-arrow-circle-right"></i></a>



        </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">


          @foreach ($portal_exams as $key=>$exam)
          <?php

              if(strtotime(date('Y-m-d')) > strtotime($exam['exam_date']))
              {
                  $cls="bg-danger";
              }
              else
              {
                  $val=$key+1;
                  if($val%2==0)
                      $cls="bg-info";
                  else
                      $cls="bg-success";
              }

          ?>
          <div class="col-lg-6 col-6">
              <div class="small-box <?php echo $cls; ?>">
                  <div class="inner">
                  <h3>{{ $exam['title']}}</h3>

                  <p>{{ $exam['cat_name']}}</p>
                  <p>Fecha del Examen : {{$exam['exam_date']}}</p>
                  </div>
                  <div class="icon">
                  <i class="ion ion-bag"></i>
                  </div>
                  @if (strtotime(date('Y-m-d')) <= strtotime($exam['exam_date']))

                      <a data-id="{{ $exam['id']}}"  class="apply_exam small-box-footer">Aplicar<i class="fas fa-arrow-circle-right"></i></a>

                  @endif

              </div>
          </div>
      @endforeach

        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection
