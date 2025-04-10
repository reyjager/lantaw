<li class="nav-item dropdown ps-4 list-unstyled">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="http://localhost:8000/images/profile-img.jpg" alt="Profile" class="rounded-circle"
            style="width: 40px; height: 40px;">

        <span class="d-none d-md-block dropdown-toggle ps-2 fs-6">{{ auth()->user()->name }}</span>

    </a><!-- End Profile Image Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6>{{ auth()->user()->name }}</h6>
            <span>Web/Mobile Developer</span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person pe-2"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear pe-2"></i>
                <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-box-arrow-right pe-2"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </li>
    </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->
</ul>
