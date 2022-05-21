<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-bar">
        <div class="nk-apps-brand">
            <a href="{{ __('dashboard') }}" class="logo-link">
                <img class="logo-light logo-img" src="{{ asset('lib/images/favicon.png') }}"
                    srcset="{{ asset('lib/images/favicon.png') }} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('lib/images/favicon.png') }}"
                    srcset="{{ asset('lib/images/favicon.png') }} 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu">
                        <ul class="nk-menu apps-menu">
                            <li class="nk-menu-item @yield('dashboard-menu-item')">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards"
                                    title="Main Dashboard">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                    <a href="#" data-toggle="dropdown" data-offset="50,-50">
                        <div class="user-avatar">
                            <span>AB</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md ml-4">
                        <div class="dropdown-inner user-card-wrap d-none d-md-block">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                    <span class="sub-text text-soft">info@softnio.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="html/user-profile-regular.html"><em
                                            class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                <li><a href="html/user-profile-setting.html"><em
                                            class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                <li><a href="html/user-profile-activity.html"><em
                                            class="icon ni ni-activity-alt"></em><span>Log Activity</span></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="{{ route('login.index') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content @yield('dashboard-menu-content')" data-content="navDashboards">
                <h5 class="title">Overview</h5>
                <ul class="nk-menu @yield('dashboard-menu')">
                    <li class="nk-menu-item @yield('dashboard-primary-menu-item')">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item @yield('classification-primary-menu-item')">
                        <a href="{{ route('classification') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">Classification</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
