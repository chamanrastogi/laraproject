
<x-admin-master title="Admin Panel">
    @section('css')
        <!-- Data Tables -->
        <link rel="stylesheet" href="{{asset('admin_asset/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin_asset/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin_asset/assets/plugin/datatables/media/css/buttons.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin_asset/assets/plugin/lightview/css/lightview/lightview.css')}}">
    @endsection
    
        @section('content')
        <div class="box-content card white">
            <h4 class="box-title ">Show Users        
                
                
                <div style="float:right">
                <a href="{{url('admin/users/create','')}}">	
                    Add Post          </a>	
                 </div>
                </h4>
            <!-- /.box-title -->
            
              <div class="card-content">
                @if(session()->has('type'))				  
                
                <div class="alert alert-{{@session('type')}}" role="alert">			
                    {{@session('msg')}}			
                  </div>
                  @endif
            <!-- /.dropdown js__dropdown -->
            <table id="example" class="table table-striped table-bordered display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Email</th>		
                        <th>Image</th>					
                        <th>Create At</th>
                        <th>Updated At</th>
                        <th>Option</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($user as $key=>$m)
                    <tr>
                        <td>{{$m->id}}</td>
                        <td>{{$m->name}}</td>
                        <td>{{$m->email}}</td>
                        <td><div style="width:250px"> <a class="item-gallery lightview " data-lightview-group="group" href="{{ $m->image_path()}}">
                            <img src="{{ $m->image_path()}}" class="img-responsive"></a></div></td>
                        
                        <td>{{$m->created_at->diffForHumans()}}</td>
                        <td>{{$m->updated_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('user.profile.show',$m->id)}}" class="btn btn-info btn-circle btn-xs waves-effect waves-light">
                                <i class="ico fa fa-pencil "></i></a>							
                            
                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['user.destory', $m->id],
                                'class' => 'form-horizontal'
                            ]) !!}
                            
                            {{ method_field('DELETE') }}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-circle btn-xs waves-effect waves-light ico fa fa-trash'] ) !!}
                            {!! Form::close()  !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
                        <!-- /.card-content -->
        @endsection
        
        @section('script')
            <!-- Data Tables -->
    
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/jszip.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/datatables/media/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/scripts/datatables.demo.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugin/lightview/js/lightview/lightview.js')}}"></script>
        @endsection
        </x-admin-master>
        