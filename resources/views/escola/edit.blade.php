@extends('adminlte::page')

@section('title', 'Escolas')

@section('content_header')
  <div class="pull-right">
    <a href="{{ url('escolas') }}" class="btn btn-primary  "><i class="fa fa-arrow-left"></i> Voltar</a>
    <a href="{{ url('escolas/create') }}" class="btn btn-success  "><i class="fa fa-plus"></i> Cadastrar</a>
  </div>
    
    <h1>Escolas</h1>


@stop

@section('content')
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulário de edição</h3>
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
              <div class="row">
              <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-warning">
                      <h4>Erro!!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
              </div>


              <div class="col-md-12">
                
                <p><strong>Subdominío: </strong> Link do site de anúncios da unidade.</p>
                <p><strong>Link da página padrão: </strong> Link da página padrão do site Jumper.</p>
                <p><strong>Escola: </strong> Nome da escola.</p>
                <p><strong>E-mail: </strong> E-mail da escola que vai receber os leads desse formulário.</p>
                <p><strong>Estado: </strong> Estado da unidade.</p>
                <p><strong>Cidade: </strong> Cidade da unidade.</p>
                <p><strong>Bairro: </strong> Bairro da unidade.</p>
                <p><strong>Google code: </strong> Código de monitoramento do google analitcs.</p>
                <p><strong>RD code: </strong> Código de integração da RD.</p>
                <p><strong>Facebook pixel: </strong> Código do pixel do facebook.</p>
              </div>


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->


        <div class="box-footer">
          
                

          </div>
          <!-- /.row -->
        </div>


        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>


<div class="clearfix"></div>
@stop