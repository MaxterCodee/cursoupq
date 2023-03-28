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
            <h1 class="m-0">Categoría</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Categoría</li>
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
                  <h3 class="card-title"></h3>

                  <div class="card-tools">
                        <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Agregar</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $cat)
                             <tr>
                                 <td><?php echo $key+1 ?></td>
                                 <td><?php echo $cat['name'] ?></td>
                                 <td><input class="category_status" data-id="<?php echo $cat['id'] ?>" <?php if($cat['status']==1){ echo "checked";} ?> type="checkbox" name="status"></td>
                                 <th>
                                     <a href="{{ url('admin/edit_category/'.$cat['id'])}}" class="btn btn-info">Editar</a>
                                     <a href="{{ url('admin/delete_category/'.$cat['id'])}}" class="btn btn-danger">Eliminar</a>
                                 </th>
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
          <h4 class="modal-title">Agregar nueva Gategoría</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/admin/add_new_category')}}" class="database_operation" method="POST">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Introduce Nombre</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="name" placeholder="Nombre Categoría" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </div>
        </form>
      </div>

    </div>
    </div>



@endsection
