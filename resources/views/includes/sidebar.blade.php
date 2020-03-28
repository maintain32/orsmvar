<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">

                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> John Deo </div>
                            <div class="profile-usertitle-job"> Manager </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="user_profile.html" data-placement="top"
                               data-original-title="Profile">
                                <i class="material-icons">person_outline</i>
                            </a>
                            <a class="tooltips" href="email_inbox.html" data-placement="top"
                               data-original-title="Mail">
                                <i class="material-icons">mail_outline</i>
                            </a>
                            <a class="tooltips" href="chat.html" data-placement="top"
                               data-original-title="Chat">
                                <i class="material-icons">chat</i>
                            </a>
                            <a class="tooltips" href="login.html" data-placement="top"
                               data-original-title="Logout">
                                <i class="material-icons">input</i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="widget.html" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="<?php echo e(Request::is('add/booking') ? 'selected' : 'title'); ?>"></span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link ">
                                <span class="title">Dashboard 1</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="dashboard2.html" class="nav-link ">
                                <span class="title">Dashboard 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Booking</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{ Request::is('add/booking') ? 'active' : '' }}">
                            <a href="../add/booking" class="nav-link ">
                                <span class="title">New Booking</span>
                                <span class="{{ Request::is('add/booking') ? 'selected' : 'title' }}"></span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('view/booking') ? 'active' : '' }}">
                            <a href="../view/booking" class="nav-link ">
                                <span class="{{ Request::is('view/booking') ? 'selected' : 'title' }}">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('edit/booking') ? 'active' : '' }}">
                            <a href="../edit/booking" class="nav-link ">
                                <span class="{{ Request::is('edit/booking') ? 'selected' : 'title' }}">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
