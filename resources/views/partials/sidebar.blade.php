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
          <li>
             <a href="#">
                <i class="icofont-shopping-cart"></i>
                <span class="link-title">Ecommerce</span>
             </a>

             <!-- Sub Menu -->
             <ul class="nav sub-menu">
                <li><a href="#">Dashboard 1</a></li>
                <li><a href="#">dashboard 2</a></li>
                <li><a href="#">orders</a></li>
                <li><a href="#">Products Catalog</a></li>
                <li><a href="#">Product Details</a></li>
                <li><a href="#">cart list</a></li>
             </ul>
             <!-- End Sub Menu -->
          </li>
          <li>
             <a href="#">
                <i class="icofont-chart-histogram"></i>
                <span class="link-title">Social Media Analytics</span>
             </a>
          </li>
          <li class="nav-category">apps</li>
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
 <!-- End Sidebar -->