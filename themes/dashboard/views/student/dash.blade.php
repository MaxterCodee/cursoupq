@extends('layouts.student')
@section('title','Portal dashboard')
@section('content')

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:#030d4f;">Panel de Inicio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.content-header -->
    <section class="content">
    <div class="col-lg-6 col-6" style="background-color:#030d4f;">
        <div class="small-box bg-info" style="background-color:#030d4f;">
            <div class="inner" style="background-color:#030d4f;">
            <h3>Curso</h3>
            <p>Curso de Introducción a la Industria Automotriz</p>
            <p>Estatus: En curso</p>
            </div>
            <div class="icon" style="background-color:#030d4f;">
            <i class="ion ion-bag" style="background-color:#030d4f;"></i>
            </div>
                <a href="{{ url('student/cursos')}}" class="small-box-footer" style="background-color:#030d4f;">Aplicar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

@endsection
