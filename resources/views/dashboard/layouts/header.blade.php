<div class="content">
    <div class="navbar-custom">
        <ul class="list-unstyled topbar-menu float-end mb-0">
            {{-- Profile section --}}
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt="user-image" class="rounded-circle" />
                    </span>
                    <span>{{ auth()->user()->username }}</span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item notify-item">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </button>
                    </form>

                </div>
            </li>
            {{-- End Profile section --}}
        </ul>
        <button class="button-menu-mobile open-left">
            <i class="fa-sharp fa-solid fa-align-justify"></i>
        </button>
    </div>
</div>
