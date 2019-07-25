@extends('adminlte::page')

@section('title', 'Escolas')

@section('content_header')
    <a href="{{ url('escolas/create') }}" class="btn btn-success  pull-right"><i class="fa fa-plus"></i> Cadastrar</a>
    <h1>Escolas</h1>


@stop

@section('content')
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulário de cadastro</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                @include('escola.form')


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->


        <div class="box-footer">
          <div class="row">
            


          </div>
          <!-- /.row -->
        </div>


        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-4">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Importante</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->


        <div class="box-footer">
          <div class="row">
            


          </div>
          <!-- /.row -->
        </div>


        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>


<div class="clearfix"></div>
@stop