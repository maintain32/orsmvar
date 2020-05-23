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
                            <a class="tooltips" href="{{ url('/logout') }}" data-placement="top"
                               data-original-title="Logout">
                                <i class="material-icons">input</i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                    <a href="/dashboard" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="<?php echo e(Request::is('dashboard') ? 'selected' : 'title'); ?>"></span>
                    </a>
                </li>
                <li class="nav-item
                    <?php echo e(Request::is('booking/add') ? 'active' : ''); ?>
                    <?php echo e(Request::is('booking/view') ? 'active' : ''); ?>
                    <?php echo e(Request::is('booking/edit') ? 'active' : ''); ?>
                    ">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Booking</span>
                        <span class="<?php echo e(Request::is('add/booking') ? 'selected' : 'title'); ?>"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{ Request::is('booking/add') ? 'active' : '' }}">
                            <a href="{{ url('booking/add') }}" class="nav-link ">
                                <span class="title">New Booking</span>
                                <span class="{{ Request::is('booking/add') ? 'selected' : 'title' }}"></span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('booking/view') ? 'active' : '' }}">
                            <a href="{{ url('booking/view') }}" class="nav-link ">
                                <span class="{{ Request::is('booking/view') ? 'selected' : 'title' }}">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('booking/edit') ? 'active' : '' }}">
                            <a href="{{ url('booking/edit') }}" class="nav-link ">
                                <span class="{{ Request::is('booking/edit') ? 'selected' : 'title' }}">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
