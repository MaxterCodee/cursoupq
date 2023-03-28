@extends('layouts.app')
@section('title','Dashboard')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Estudiantes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Estudiantes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">

                  <div class="card-tools">
                        <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Agregar</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Matrícula</th>
                                {{-- <th>DOB</th> --}}
                                <th>Examen</th>
                                <th>Fecha del Examen</th>
                                <th>Resultado</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($students as $key=>$std)
                              <tr>
                                  <td>{{ $key+1}}</td>
                                  <td>{{ $std['name']}}</td>
                                  <td>{{ $std['matricula']}}</td>
                                  {{-- <td>{{ $std['dob']}}</td> --}}
                                  <td>{{ $std['ex_name']}}</td>
                                  <td>{{ $std['exam_date']}}</td>
                                  <td>
                                    <?php
                                    if($std['exam_joined']==1){
                                    ?>
                                          <a href="{{url('admin/admin_view_result/'.$std['id'])}}" class="btn btn-info btn-sm">Ver Resultado</a>
                                    <?php
                                    }
                                    ?>


                                  </td>
                                  <td><input type="checkbox" class="student_status" data-id="{{ $std['id']}}" <?php if($std['std_status']==1){ echo "checked";} ?> name="status"></td>
                                  <td>
                                      {{-- <a href="{{url('admin/edit_students/'.$std['id'])}}" class="btn btn-primary">Edit</a> --}}
                                      <a href="{{url('admin/delete_students/'.$std['id'])}}" class="btn btn-danger btn-sm">Eliminar</a>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Agregar Estudiante</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ url('admin/add_new_students')}}" class="database_operation">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Ingresa Nombre</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="name" placeholder="Ingresa Nombre" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Ingresa Email</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="email" placeholder="Ingresa Email" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Ingrese Matrícula</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="matricula" placeholder="Ingrese Matrícula" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Select DOB</label>
                            <input type="date" required="required" name="dob"  class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Select exam</label>
                            <select class="form-control" required="required" name="exam">
                                <option value="">Select</option>
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam['id']}}">{{ $exam['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" required="required" name="password" placeholder="Enter password" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </form>
      </div>

    </div>
    </div>



@endsection
