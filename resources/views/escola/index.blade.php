@extends('adminlte::page')

@section('title', 'Escolas')

@section('content_header')
    <a href="{{ url('escolas/create') }}" class="btn btn-success  pull-right"><i class="fa fa-plus"></i> Cadastrar</a>
    <h1>Escolas</h1>


@stop

@section('content')
    <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Todas as escolas cadastradas: {{$escolas->count()}}</h3>



              <div class="box-tools col-md-5 pull-right">


               
			
					<form class="input-group input-group-sm">
	                	<input type="text" class="form-control" name="s" placeholder="Escola xyz...">
	                    <span class="input-group-btn">
	                      <button type="submit" class="btn btn-primary btn-flat" >Pesquisar!</button>

	                      

	                    </span>

	                </form>


              </div>

              
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                 


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
@stop