
<x-admin-master title="Admin Panel">


    @section('content')
   
		<h4 class="box-title">Add Post        
			
			
			<div style="float:right">
			<a href="{{url('admin/posts','')}}">	
				Show Post          </a>	
			 </div>
			</h4>
		<!-- /.box-title -->
		<div class="card-content">
			
				{!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
			
				<div class="form-group">
					{!! Form::label('title', 'Post Title:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Post Title']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('post_image', 'Post Image:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::file('post_image', ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('body', 'Post Text:', ['class' => 'col-md-2 control-label']) !!}
					<div class="col-lg-10">
						{!! Form::textarea('post_image', $value = null, ['class' => 'form-control', 'placeholder' => 'Post Body']) !!}
					</div>
				</div>
				<div class="form-group col-md-12 text-right">
					{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-sm waves-effect waves-light'] ) !!}
					{!! Form::reset('Reset', ['class' => 'btn btn-info btn-sm waves-effect waves-light'] ) !!}
				</div>
				{!! Form::close()  !!}
	
			</div>

					<!-- /.card-content -->
    @endsection
    </x-admin-master>
    