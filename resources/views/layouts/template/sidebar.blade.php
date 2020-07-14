<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Excellent <sup>Lab</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php
        $menu = DB::table('tb_menu')->where('is_admin',Auth::user()->is_admin)->where('is_main_menu',0)->get();
        // print_r($menu);
    ?>

    @foreach ($menu as $m)
    <div class="sidebar-heading">
        {{$m->judul_menu}}
    </div>
    <?php
        $menuId = $m->id;
        $subMenu = DB::table('tb_menu')->where('is_main_menu',$menuId)->where('is_admin',Auth::user()->is_admin)->get();
    ?>
    @foreach ($subMenu as $sm)
        @if ($title == $sm->judul_menu)
        <li class="nav-item active">
        @else
        <li class="nav-item"> 
        @endif
        <a class="nav-link pb-0" href="{{route('home')}}">
            <i class="{{$sm->icon}}"></i>
            <span>{{$sm->judul_menu}}</span></a>
        </li>
    @endforeach
    <hr class="sidebar-divider d-none d-md-block mt-3">
    
    @endforeach

    <!-- Divider -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->