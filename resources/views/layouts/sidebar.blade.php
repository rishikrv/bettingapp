      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="index" class="waves-effect">
                                    <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-alt"></i><span> Admin <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                @if((ucfirst(Auth()->user()->role))==1)

                                <li><a href="supermaster-details">Super Master</a></li>
                                @endif

                                @if((ucfirst(Auth()->user()->role))==1 || (ucfirst(Auth()->user()->role))==2 )
                                    <li><a href="master-details">Master</a></li>
                                    @endif
                                    @if((ucfirst(Auth()->user()->role))==1 || (ucfirst(Auth()->user()->role))==2 || (ucfirst(Auth()->user()->role))==3 )

                                    <li><a href="superagent-detail">Super Agent</a></li>
                                    @endif
                                    @if((ucfirst(Auth()->user()->role))==1 || (ucfirst(Auth()->user()->role))==2 || (ucfirst(Auth()->user()->role))==3 || (ucfirst(Auth()->user()->role))==4 )

                                    <li><a href="agent-details">Agent</a></li>
                                    @endif
                                    <li><a href="client-details">Client</a></li>
                                </ul>
                            </li>

                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-view-grid"></i><span> Sport's Betting <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="sport-detail">Sport's Details</a></li>
                                </ul>
                            </li>
                           

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-stats-up"></i> <span> Ledger  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="my-ledger">My Ledger</a></li>
                                    <li><a href="client-ledger">Client Ledger</a></li>
                                    <li><a href="agent-ledger">Agent Ledger</a></li>
                                    <li><a href="super-agent-ledger">Super Agent Ledger</a></li>
                                    <li><a href="master-ledger">Master Ledger</a></li>
                                    <li><a href="super-master-ledger">Super Master Ledger</a></li>
                                    <li><a href="all-collection-ledger">All Collection</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-money"></i> <span> Cash Transaction  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="debit-card-client">Debit/Credit Entry (C)</a></li>
                                    <li><a href="debit-card-agent">Debit/Credit Entry (A)</a></li>
                                    <li><a href="debit-card-superagent">Debit/Credit Entry (SA)</a></li>
                                    <li><a href="debit-card-master">Debit/Credit Entry (M)</a></li>
                                    <li><a href="debit-card-supermaster">Debit/Credit Entry (SM)</a></li>
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i> <span> Reports  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="secure-code-report">Secure Code Report</a></li>
                                   
                                </ul>
                            </li> -->

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i> <span> Setting  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                
                                <ul class="submenu">
                                    <li><a href="change-password">Change password</a></li>
                                   
                                </ul>
                            </li>
                            
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
