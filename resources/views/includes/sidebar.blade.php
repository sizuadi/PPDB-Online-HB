<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Harapan Bangsa <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Settings
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data:</h6>
                        <a class="collapse-item" href="{{route('user.index')}}">User</a>
                        <a class="collapse-item" href="{{route('agama.index')}}">Agama</a>
                        <a class="collapse-item" href="{{route('jenis_kelamin.index')}}">Jenis Kelamin</a>
                        <a class="collapse-item" href="{{route('jurusan.index')}}">Jurusan</a>
                        <a class="collapse-item" href="{{route('pekerjaan_ortu.index')}}">Pekerjaan Orang Tua</a>
                        <a class="collapse-item" href="{{route('penghasilan_ortu.index')}}">Penghasilan Orang tua</a>
                    </div>
                </div>
            </li>

           

            

           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>