<!-- Sidebar -->
<nav class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Header -->
    <div class="sidebar-header d-none d-lg-block">
       <!-- Sidebar Toggle Pin Button -->
       <div class="sidebar-toogle-pin">
          <i class="icofont-tack-pin"></i>
       </div>
       <!-- End Sidebar Toggle Pin Button -->
    </div>
    <!-- End Sidebar Header -->

    <!-- Sidebar Body -->
    <div class="sidebar-body">
       <!-- Nav -->
       <ul class="nav">
          <li class="nav-category">Main</li>
          <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
             <a href="{{ route('dashboard') }}">
                <i class="icofont-pie-chart"></i>
                <span class="link-title">Dashboard</span>
             </a>
          </li>

          @role('super_admin')
          <li class="nav-category">Administration</li>
          <li class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
             <a href="{{ route('admin.users.index') }}">
                <i class="icofont-users"></i>
                <span class="link-title">User Management</span>
             </a>
          </li>
          <li class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
             <a href="{{ route('admin.settings.index') }}">
                <i class="icofont-settings"></i>
                <span class="link-title">System Settings</span>
             </a>
          </li>
          @endrole

          <li class="nav-category">Apps</li>
          <li>
             <a href="#">
                <i class="icofont-mail-box"></i>
                <span class="link-title">Email</span>
             </a>
             <!-- Sub Menu -->
             <ul class="nav sub-menu">
                <li><a href="#">Inbox</a></li>
                <li><a href="#">Read</a></li>
                <li><a href="#">Compose</a></li>
             </ul>
             <!-- End Sub Menu -->
          </li>
          <li>
             <a href="#">
                <i class="icofont-wechat"></i>
                <span class="link-title">Chat</span>
             </a>
          </li>
          <li>
             <a href="#">
                <i class="icofont-listing-box"></i>
                <span class="link-title">To Do List</span>
             </a>

             <!-- Sub Menu -->
             <ul class="nav sub-menu">
                <li><a href="#">Tasks</a></li>
                <li><a href="#">add new</a></li>
                <li><a href="#">details</a></li>
             </ul>
             <!-- End Sub Menu -->
          </li>
          <li>
             <a href="#">
                <i class="icofont-calendar"></i>
                <span class="link-title">Calendar</span>
             </a>
          </li>

          <li class="nav-category">UI Elements</li>
          <li>
             <a href="#">
                <i class="icofont-magic-alt"></i>
                <span class="link-title">widgets</span>
             </a>
          </li>

          <li class="nav-category">Support</li>
       </ul>
       <!-- End Nav -->
    </div>
    <!-- End Sidebar Body -->
 </nav>
