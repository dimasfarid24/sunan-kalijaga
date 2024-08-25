<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="m-2">
                    <div class="my-2 text-center text-uppercase text-nowrap text-xs">{{ $nama }}</div>
                    <div class="">
                        <a href="#" class="d-flex justify-content-center">
                            <img src="https://placehold.co/96x96" class="rounded-full" alt="">
                        </a>
                    </div>
                    <div class="">
                        <hr class="border border-b-white">
                    </div>
                </div>
                {{-- Data --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                <div class="collapse" id="collapseData" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/guru"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Guru</a>
                        <a class="nav-link" href="/siswa"><i class="sb-nav-link-icon fa-solid fa-user"></i>Siswa</a>
                    </nav>
                </div>
                {{-- End Data --}}
                @if (Auth::guard('user')->user()->type === 'guru')
                    {{-- Siswa --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSiswa" aria-expanded="false" aria-controls="collapseSiswa">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Siswa
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                    <div class="collapse" id="collapseSiswa" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Daftar Siswa</a>
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user"></i>Kelas</a>
                        </nav>
                    </div>
                    {{-- End Data --}}
                @endif
                @if (Auth::guard('user')->user()->type === 'siswa')
                    {{-- Siswa --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRaport" aria-expanded="false" aria-controls="collapseRaport">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Raport
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                    <div class="collapse" id="collapseRaport" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Tugas</a>
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Ulangan Harian</a>
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user"></i>Nilai Akhir</a>
                        </nav>
                    </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKelas" aria-expanded="false" aria-controls="collapseKelas">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Kelas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                    <div class="collapse" id="collapseKelas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Jadwal Kelas</a>
                            <a class="nav-link" href="#"><i class="sb-nav-link-icon fa-solid fa-user-tie"></i>Absesnsi</a>
                        </nav>
                    </div>
                    {{-- End Data --}}
                @endif
            </div>
        </div>
    </nav>
</div>