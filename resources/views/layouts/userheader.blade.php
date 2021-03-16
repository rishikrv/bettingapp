<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <span class="navbar-brand" href="#">Veltrix</span>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="userindex">Home </a>
        </li>
    </ul>
    <!-- Dropdown -->
    
    <ul class="navbar-right d-flex list-inline float-right ml-auto">
    <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <!-- <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle"> -->
                    <!-- {{ ucfirst(Auth()->user()->id) }} -->
                    <h5 class="page-title" style="color:white;"> {{ ucfirst(Auth()->user()->name) }}  </h5>

                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
                </div>
            </div>
        </li>
    </ul>

</nav>



























<!-- Top Bar Start -->