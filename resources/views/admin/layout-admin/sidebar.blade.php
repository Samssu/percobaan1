 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{asset('AdminLTE/dist')}}//img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{asset('AdminLTE/dist')}}//img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Admin</a>
             </div>
         </div>



         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Dashboard Menu -->
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p class="ms-2">
                             <!-- Add margin to separate icon from text -->
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="./dashboard" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard admin</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <<!-- Community Menu -->
                     <li class="nav-item">
                         <a href="/community-admin" class="nav-link">
                             <i class="nav-icon fas fa-users"></i> <!-- Ganti dengan ikon orang -->
                             <p class="ms-2">
                                 <!-- Add margin to separate icon from text -->
                                 Community
                             </p>
                         </a>
                     </li>


                     <!-- Gallery Menu -->
                     <li class="nav-item">
                         <a href="/gallery-admin" class="nav-link">
                             <i class="nav-icon far fa-image"></i>
                             <p class="ms-2">
                                 <!-- Add margin to separate icon from text -->
                                 Gallery
                             </p>
                         </a>
                     </li>

                     <!-- Activity Menu -->
                     <li class="nav-item">
                         <a href="/activity-admin" class="nav-link">
                             <i class="nav-icon fas fa-calendar-alt"></i> <!-- Add an icon for Activity -->
                             <p class="ms-2">
                                 <!-- Add margin to separate icon from text -->
                                 Activity
                             </p>
                         </a>
                     </li>

                     <!-- Logout Menu -->
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-sign-out-alt"></i> <!-- Add an icon for Logout -->
                             <p class="ms-2">
                                 <!-- Add margin to separate icon from text -->
                                 Logout
                             </p>
                         </a>
                     </li>
             </ul>
         </nav>

         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>