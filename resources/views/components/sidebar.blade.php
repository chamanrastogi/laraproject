<div class="navigation">
    <h5 class="title">Navigation</h5>
    <!-- /.title -->
    <ul class="menu js__accordion">
        <li>
            <a class="waves-effect" href="index-2.html"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
        </li>
       
      <x-admin.sidebar.admin-sidebar-post></x-admin-sidebar-post>
   
        @if(auth()->user()->userHasRole('Admin'))
        <x-admin.sidebar.admin-sidebar-user></x-admin-sidebar-user>
        @endif
    </ul>
   
    
    <!-- /.menu js__accordion -->
</div>