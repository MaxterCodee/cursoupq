@extends('layouts.app')
@section('title','Update Exam Questions')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Pregunta</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Pregunta</li>
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

                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/edit_question_inner')}}" class="database_operation">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Pregunta</label>
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $q[0]['id']}}">
                                    <input type="text" value="{{ $q[0]['questions']}}" required="required" name="question" placeholder="Pregunta" class="form-control">
                                </div>
                            </div>
                            <?php
                                $options = json_decode($q[0]['options']);
                            ?>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Opción 1</label>
                                    <input type="text" value="{{ $options->option1}}" required="required" name="option_1" placeholder="Opción 1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Opción 2</label>
                                    <input type="text" value="{{ $options->option2}}" required="required" name="option_2" placeholder="Opción 2" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Opción 3</label>
                                    <input type="text" value="{{$options->option3}}" required="required" name="option_3" placeholder="Opción 3" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Opción 4</label>
                                    <input type="text" value="{{ $options->option4}}" required="required" name="option_4" placeholder="Opción 4" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="">Select correct option</label>
                              <select class="form-control" required="required" name="ans">
                                  <option value="">Seleccionar</option>

                                  <option value="option_1">Opción 1</option>
                                  <option value="option_2">Opción 2</option>
                                  <option value="option_3">Opción 3</option>
                                  <option value="option_4">Opción 4</option>

                              </select>
                          </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
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



@endsection
