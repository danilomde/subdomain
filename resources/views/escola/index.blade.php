@extends('adminlte::page')

@section('title', 'Escolas')

@section('content_header')
    <a href="{{ url('escolas/create') }}" class="btn btn-success  pull-right"><i class="fa fa-plus"></i> Cadastrar</a>
    <h1>Escolas</h1>

    @if ($message = Session::get('success'))
	    <br />
		<div class="col-md-12 text-center">
			<div class="alert alert-success ">	    
		        <p>{{ $message }}</p>
		    </div>	
		</div>
	    
	@endif


@stop

@section('content')
    <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Todas as escolas cadastradas: {{$escolas->count()}}</h3>



              <div class="box-tools col-md-5 pull-right">


               
			
					<form class="input-group input-group-sm">
	                	<input type="text" class="form-control" name="s" placeholder="Escola xyz..." value="@php echo @$_GET['s']; @endphp">
	                    <span class="input-group-btn">
	                      <button type="submit" class="btn btn-primary btn-flat" >Pesquisar!</button>

	                      

	                    </span>

	                </form>


              </div>

              
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                	<table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Criado em</th>
                  <th>Página</th>
                  
                  <th>Escola</th>
                  <th>Ação</th>
                </tr>
               
               	@foreach($escolas as $escola)
					<tr>
	                  <td>{{$escola->id}}</td>
	                  <td>{{$escola->created_at->format('d/m/Y  H:s')}}</td>
	                  <td>{{$escola->username}}.jumpercursos.com.br</td>
	                  
	                  <td>{{$escola->estado}} - {{$escola->cidade}}, {{$escola->bairro}}</td>
	                  <td>
	                  	<a class="btn btn-info" href="{{ route('escolas.show',$escola->id) }}"><i class="fa fa-eye"></i> Ver</a>
        
				        
				            <a class="btn btn-primary" href="{{ route('escolas.edit',$escola->id) }}"><i class="fa fa-edit"></i> Editar</a>
				        
				            {!! Form::open(['method' => 'DELETE','route' => ['escolas.destroy', $escola->id],'style'=>'display:inline']) !!}
				           
				                {{ Form::button('<i class="fa fa-trash" aria-hidden="true"></i>   Deletar', ['class' => 'btn btn-danger ', 'type' => 'submit' , 'onclick' => "return confirm('Você tem absoluta certeza ?  se sim, clique em ok!')"]) }}

				                
				            {!! Form::close() !!}
				        


	                  </td>
	                </tr>

				@endforeach
                

              </tbody></table>



					
                 


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