
<x-admin-master title="Admin Panel">


    @section('content')
	<div class="box-content card white">
		<h4 class="box-title">Create User        
			
			
			<div style="float:right">
			
			 </div>
            </h4>
          
		<!-- /.box-title -->
		<div class="card-content">
            @if(session()->has('type'))				  
			
			<div class="alert alert-{{@session('type')}}" role="alert">			
				{{@session('msg')}}			
			  </div>
			  @endif
			
				{!! Form::open([
					'method' => 'patch',
					
					'class' => 'form-horizontal',
					'files'=>true
				]) !!}
				<div class="form-group">
					{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::password('password',  ['class' => 'form-control', 'placeholder' => 'Password']) !!}
					</div>
				</div>
                <div class="form-group">
					{!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::password('password_confirmation',  ['class' => 'form-control','id'=>'password-confirm', 'placeholder' => 'Confirm Password']) !!}
					</div>
				</div>
				<div class="form-group col-md-12 text-right">
					{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-sm waves-effect waves-light'] ) !!}
					{!! Form::reset('Reset', ['class' => 'btn btn-info btn-sm waves-effect waves-light'] ) !!}
				</div>
				{!! Form::close()  !!}
	
			</div>
		</div>
					<!-- /.card-content -->
	@endsection
	
    </x-admin-master>
    