<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="/dashboard">
                    <i class="ri-dashboard-2-line"></i> <span>Dashboards</span>
                </a>

            </li> <!-- end Dashboard Menu -->


            <li class="menu-title"><i class="ri-more-fill"></i> <span>Master Data</span>
            </li>

            <li class="nav-item open">
                <a class="nav-link menu-link {{ $active == 'users-panitia' || $active == 'users-peserta' ? 'active' : '' }}"
                    href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="ri-team-fill"></i> <span>Data Users</span>
                </a>
                <div class="collapse menu-dropdown {{ $active == 'users-panitia' || $active == 'users-peserta' ? 'show' : '' }}"
                    id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="/data-panitia?action=panitia"
                                class="nav-link {{ $active == 'users-panitia' ? 'active' : '' }}"> Panitia </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-peserta?action=peserta"
                                class="nav-link {{ $active == 'users-peserta' ? 'active' : '' }}"> Peserta </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'users' ? 'active' : '' ?>" href="/data-users">
                    <i class="ri-account-circle-line"></i> <span>Data Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'verif' ? 'active' : '' ?>" href="/data-verifikasi">
                    <i class="ri-rotate-lock-line"></i> <span>Verifikasi</span>
                </a>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span>Master Report</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'role' ? 'active' : '' ?>" href="/data-role">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Role</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'biodata' ? 'active' : '' ?>" href="/data-biodata">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Biodata</span>
                </a>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span>Financial Statements</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'layanan' ? 'active' : '' ?>" href="/data-layanan">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Layanan</span>
                </a>
            </li>

            <li class="nav-item open">
                <a class="nav-link menu-link {{ $active == 'jadwal-mcu' || $active == 'jadwal-passport' || $active == 'jadwal-bimbingan' ? 'active' : '' }}"
                    href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data jadwal</span>
                </a>
                <div class="collapse menu-dropdown {{ $active == 'jadwal-mcu' || $active == 'jadwal-passport' || $active == 'jadwal-bimbingan' ? 'show' : '' }}"
                    id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="/data-jadwal?action=mcu"
                                class="nav-link {{ $active == 'jadwal-mcu' ? 'active' : '' }}"> MCU </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-jadwal?action=passport"
                                class="nav-link {{ $active == 'jadwal-passport' ? 'active' : '' }}"> PASSPORT </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-jadwal?action=bimbingan"
                                class="nav-link {{ $active == 'jadwal-bimbingan' ? 'active' : '' }}"> BIMBINGAN </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#importExcel">
                                UPLOAD JADWAL </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'transaksi' ? 'active' : '' ?>" href="/data-transaksi">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'keuangan' ? 'active' : '' ?>" href="/data-keuangan">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Keuangan</span>
                </a>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span>Schedule Report </span></li>

            <li class="nav-item">
                <a class="nav-link menu-link <?= $active == 'arsip' ? 'active' : '' ?>" href="#">
                    <i class="ri-pencil-ruler-2-line"></i> <span>Data Arsip</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
