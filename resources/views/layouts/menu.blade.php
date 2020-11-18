 <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"> <i class="fas fa-list-ul"></i><span> Posts</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i> All Post</a></li>
                            <li><a href="{{route('post-category.index')}}"> <i class="fas fa-caret-right"></i> Categories</a></li>
                             <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i> Tags</a></li>

                        </ul>
                    </li>
                     <li class="submenu">
                        <a href="#"><i class="fab fa-page4"></i> <span> Product</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i> All Product</a></li>
                            <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Categories</a></li>

                        </ul>
                    </li>


                   {{--  <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                            <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                    </li> --}}



                </ul>
            </div>
        </div>
    </div>
