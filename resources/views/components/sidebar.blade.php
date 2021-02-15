<div class="navigation">
    <h5 class="title">Navigation</h5>
    <!-- /.title -->
    <ul class="menu js__accordion">
        <li>
            <a class="waves-effect" href="index-2.html"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
        </li>
       
        <li>
            <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-bar-chart"></i><span>Post</span><span class="menu-arrow fa fa-angle-down"></span></a>
            <ul class="sub-menu js__content">
                <li><a href="{{url('admin/post/create')}}">Add Post</a></li>
                <li><a href="{{url('admin/post')}}">Show Post</a></li>
              
            </ul>
            <!-- /.sub-menu js__content -->
        </li>
        <li>
            <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-bar-chart"></i><span>User</span><span class="menu-arrow fa fa-angle-down"></span></a>
            <ul class="sub-menu js__content">
                <li><a href="{{url('admin/users/create')}}">Add User</a></li>
                <li><a href="{{url('admin/users')}}">Show User</a></li>
              
            </ul>
            <!-- /.sub-menu js__content -->
        </li>
    </ul>
   
    
    <!-- /.menu js__accordion -->
</div>