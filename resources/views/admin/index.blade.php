
<x-admin-master title="Admin Panel">


    @section('content')
    <h4 class="box-title">Inline form</h4>
					<!-- /.box-title -->
                    <div class="card-content">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inp-type-1" class="col-md-3 control-label">Text</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inp-type-1" placeholder="Some text value ...">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-2" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" id="inp-type-2" placeholder="Email address">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-3" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" id="inp-type-3" placeholder="Password" value="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-md-3 control-label">Placeholder</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inp-type-4" placeholder="Placeholder">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-5" class="col-md-3 control-label">Textarea</label>
								<div class="col-md-9">
									<textarea class="form-control" id="inp-type-5" placeholder="Write your meassage"></textarea>
								</div>
							</div>
						</form>
					</div>
					<!-- /.card-content -->
    @endsection
    </x-admin-master>
    