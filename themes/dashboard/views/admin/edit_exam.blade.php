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
            <h1 class="m-0">Editar Examen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Examen</li>
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

                <div class="card-body container">
                    <form action="{{ url('/admin/edit_exam_sub')}}" class="database_operation container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Título</label>
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $exam->id }}">
                                    <input type="text" required="required" value="{{ $exam->title}}" name="title" placeholder="Título" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Fecha</label>
                                    <input type="date" required="required"  value="{{ $exam->exam_date}}" name="exam_date"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                  <label for="">Duración (en minutos)</label>
                                  <input type="text" required="required"  value="{{ $exam->exam_duration}}" name="exam_duration"  class="form-control">
                              </div>
                          </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Selecionar categoría</label>
                                    <select class="form-control" required="required" name="exam_category">
                                        <option value="">Seleccionar</option>
                                        @foreach ($category as $cat)
                                        <option <?php if($exam->category==$cat['id']) { echo "selected";} ?> value="{{ $cat['id']}}">{{ $cat['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
