<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    {{-- <img src="images/profile/pic1.jpg" width="20" alt=""> --}}
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>@auth {{ auth()->user()->username }} @endauth!</b></span>
                        <small class="text-end font-w400">@auth {{ auth()->user()->email }} @endauth</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li><a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-025-dashboard"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            </li>
            <li><a href="{{ route('data_tamu.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-043-menu"></i>
                <span class="nav-text">Data Tamu</span>
            </a>
            </li>
            <li><a href="{{ route('data_tamu.create') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Input Data</span>
                </a>
            </li>
            <li><a href="{{ route('gallery.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-072-printer"></i>
                <span class="nav-text">Gallery</span>
            </a>
        </li>
        </ul>
        {{-- <div class="copyright">
            <p><strong>Dompet Payment Admin Dashboard</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div> --}}
    </div>
</div>