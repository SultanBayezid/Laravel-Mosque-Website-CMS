      <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li> -->
    
               
                        <li> <a class="waves-effect waves-dark" href="{{route('prayer-time.index')}}" aria-expanded="false"><i
                                    class="fa fa-clock-o"></i><span class="hide-menu">Prayer Times</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('jamattime.index')}}" aria-expanded="false"><i
                                    class="fa fa-male"></i><span class="hide-menu">Jamat Times</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('news.index')}}" aria-expanded="false"><i
                                    class="fa fa-drivers-license"></i><span class="hide-menu">News</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('announcement.index')}}" aria-expanded="false"><i
                                    class="fa fa-coffee"></i><span class="hide-menu">Announcements</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('slider.index')}}" aria-expanded="false"><i
                                    class="fa fa-image"></i><span class="hide-menu">Home Page Sliders</span></a>
                        </li>
                    </ul>
                    <div class="text-center mt-4">
                            <a class="btn waves-effect waves-light btn-danger hidden-md-down text-white btn-sm" href="{{ route('logout') }}"
   onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
<span class="me-2" data-feather="log-out"></span>
Sign out
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->