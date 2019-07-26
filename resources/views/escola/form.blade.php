 {{--  Abrir formulário --}}


  	@if( isset($escola->id)  )
   		{!! Form::model($escola, ['method' => 'PATCH', 'route' => ['escolas.update', $escola->id], 'class' => 'form']) !!}
   		
	@else
		{!! Form::open(array('route' => 'escolas.store','method'=>'POST')) !!}
	@endif

       
       <div class="form-group col-md-12">
         	{!! Form::label('username', 'Subdominío', array('class' => 'control-label' )) !!} 
         	<div class="input-group">
	         	{!! Form::text('username', null, ['class' => 'form-control ']) !!}	
	         	<span class="input-group-addon">.jumpercursos.com.br</span>
	      	</div> 
         	<div class="clearfix"></div>                  
       </div> 


       <div class="form-group col-md-12">
         {!! Form::label('link_site', 'Link da página padrão', array('class' => 'control-label' )) !!} 
         <div class="input-group">
         	<span class="input-group-addon">https://</span>
         	{!! Form::text('link_site', null, ['class' => 'form-control']) !!}
         </div>  
       </div>  


       <div class="form-group col-md-6">
         {!! Form::label('escola', 'Escola', array('class' => 'control-label' )) !!} 
         {!! Form::text('escola', null, ['class' => 'form-control']) !!}
       </div> 

       <div class="form-group col-md-6">
         {!! Form::label('email', 'E-mail', array('class' => 'control-label' )) !!} 
         {!! Form::text('email', null, ['class' => 'form-control']) !!}
       </div> 


       <div class="form-group col-md-4">
         {!! Form::label('estado', 'Estado', array('class' => 'control-label' )) !!} 
         {!! Form::text('estado', null, ['class' => 'form-control']) !!}
       </div> 


       <div class="form-group col-md-4">
         {!! Form::label('cidade', 'Cidade', array('class' => 'control-label' )) !!} 
         {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
       </div>


       <div class="form-group col-md-4">
         {!! Form::label('bairro', 'Bairro', array('class' => 'control-label' )) !!} 
         {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
       </div> 




       <div class="form-group col-md-12">
       	{!! Form::label('google_code', 'Google code', array('class' => 'control-label' )) !!}
        {!! Form::textarea('google_code', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group col-md-12">
       	{!! Form::label('rd_code', 'RD code', array('class' => 'control-label' )) !!}
        {!! Form::textarea('rd_code', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group col-md-12">
       	{!! Form::label('facebook_code', 'Facebook pixel', array('class' => 'control-label' )) !!}
        {!! Form::textarea('facebook_code', null, ['class' => 'form-control']) !!}
      </div>



      <div class="form-group text-right col-md-12">
      	@if( isset($escola->id)  )
	   		{!! Form::submit('Atualizar', ['class' => 'btn btn-success']) !!}
		@else
			{!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
		@endif
        
      </div>


    {!! Form::close() !!} 

