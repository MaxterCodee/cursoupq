@extends('layouts.student')
@section('title','Result')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Resultado</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examen</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                <!-- Default box -->
                <!-- /.card -->
                <div class="card mt-4">

                    <div class="card-body">
                        <h2>Información del estudiante</h2>
                        <table class="table">
                            <tr>
                                <td>Nombre : </td>
                                <td>{{ $student_info->name}}</td>
                            </tr>
                            <tr>
                                <td>Matricula : </td>
                                <td>{{ $student_info->matricula}}</td>
                            </tr>
                            <tr>
                                <td>Correo : </td>
                                <td>{{ $student_info->email}}</td>
                            </tr>
                            {{-- <tr>
                                <td>DOB : </td>
                                <td>{{ $student_info->dob}}</td>
                            </tr> --}}
                            <tr>
                                <td>Examen : </td>
                                <td>{{ $exam_info->title}}</td>
                            </tr>
                            <tr>
                                <td>Fecha del examen : </td>
                                <td>{{ $exam_info->exam_date}}</td>
                            </tr>
                        </table>
                        <h2>Resultado del examen</h2>
                        <table class="table">
                            <tr>
                                <td>Respuestas correctas : </td>
                                <td>{{ $result_info->yes_ans}}</td>
                            </tr>
                            <tr>
                                <td>Respuestas erróneas : </td>
                                <td>{{ $result_info->no_ans}}</td>
                            </tr>
                            <tr>
                                <td>Total : </td>
                                <td>{{ $result_info->yes_ans+$result_info->no_ans}}</td>
                            </tr>
                            <tr>
                                <td>Calificacion:  </td>
                                <td>{{ round(($result_info->yes_ans/($result_info->yes_ans+$result_info->no_ans))*10, 2) }}</td>
                            </tr>
                            <tr>
                                <td>Diploma : </td>
                                <td>
                                    {{-- <a href="{{ url('student/diploma/4') }}"  type="button" class="btn btn-info">Ver</a> --}}
                                    @if(round(($result_info->yes_ans/($result_info->yes_ans+$result_info->no_ans))*10, 2) >= 7)
                                    <a href="{{ url('student/diploma/4') }}"  type="button" class="btn btn-info">Ver</a>
                                    @else
                                        <p>No aplica</p>
                                    @endif

                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->



@endsection
