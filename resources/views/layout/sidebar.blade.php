
  <div class="page-body-wrapper sidebar-icon">
<header class="main-nav">
    <div class="sidebar-user text-center">

        <img class="img-90 rounded-circle " style="border: none;" src="{{ asset('template_dashboard/assets/images/dashboard/fill.png') }}" alt="" />

        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
    </div>

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Umum</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>

                    @if (Auth::user()->role == 'admin')
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>Data</span></a>
                        <ul class="nav-submenu menu-content"  style="display: none;">
                            <li><a href="{{ route('user.index') }}" class="">Data User</a></li>
                            <li><a href="{{ route('penerbit.index') }}" class="">Penerbit</a></li>


                        </ul>
                    </li>

@endif
   @if (Auth::user()->role == 'user')
   <li class="dropdown">
    <a class="nav-link menu-title link-nav" href="{{ route('buku.index') }}"><i data-feather="book"></i><span>Buku</span></a>
</li>
   @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>

</header>

