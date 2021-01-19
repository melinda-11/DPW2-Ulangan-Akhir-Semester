@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     
         
      <span class="brand-text font-weight-light">Admin BabyShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
            {{request()->user()->nama}}
            @else
            Silahkan login kembali
            @endif 
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                  <i class="nc-icon nc-icon nc-paper-2"></i>
                  <p>DASHBOARD</p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a class="nav-link" href="{{url('beranda')}}">
                        <i class="fas fa-gifts"></i>                        
                           <p>Beranda</p>
                        </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('/admin/produk')}}">
                        <i class="fas fa-gifts"></i>                        
                           <p>Produk</p>
                        </a>
              </li>
             
               <li>
                        <li class="nav-item">
                       <a href="{{url('/admin/user')}}" class="nav-link">
                       <i class="fas fa-users"></i>
                            <p>User</p> 
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('login')}}">
                        <i class="fas fa-sign-in-alt"></i>                          
                           <p>Login</p>
                        </a>

                    </li>


            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>