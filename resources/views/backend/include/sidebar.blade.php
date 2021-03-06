<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-circle"></i><span class="hide-menu">User</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.user')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create User </span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.user')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> User Info </span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.resign.user')}}" class="sidebar-link"><i class="fas fa-user-times"></i><span class="hide-menu"> Resigned User </span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.terminate.user')}}" class="sidebar-link"><i class="fas fa-cut"></i><span class="hide-menu"> Terminate User </span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.create.user-group')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create User Group </span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.user-group')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu">User Group Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-check-circle"></i><span class="hide-menu">Attendance</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.create.attendance') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create Attendance</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.info.attendance') }}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu">Attendance Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-chevron-circle-right"></i><span class="hide-menu">Task Assign </span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.create.task') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create Task</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.info.task') }}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Task Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-gg-circle"></i><span class="hide-menu">Loan</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.create.loanperiod') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create Loan Period</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.info.loanperiod') }}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Loan Period Info</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.create.loan') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu"> Create Loan</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.info.loan') }}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu">Loan info </span></a></li>
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" fas fa-arrow-circle-right"></i><span class="hide-menu">Job</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.candidate')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create Candidate</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.candidate')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Candidate Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.create.message')}}" aria-expanded="false"><i class="fab fa-facebook-messenger"></i><span class="hide-menu">Message</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-dot-circle"></i><span class="hide-menu">Leave</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.leave')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create Leave</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.leave')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Leave Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clock"></i><span class="hide-menu">Overtime</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.overtime')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create Overtime</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.overtime')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Overtime Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-donate"></i><span class="hide-menu">Payroll</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.salary')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create salaray</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.salary')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Salary Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.info.provident')}}" aria-expanded="false"><i class="fas fa-chevron-circle-down"></i><span class="hide-menu">Provident Fund</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-stop-circle"></i><span class="hide-menu">Announcement</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.announcement')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create Announcement</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.announcement')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Announce Info </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-stop-circle"></i><span class="hide-menu">Role</span></a>
                            <ul style="background:#373737;" aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('admin.create.role')}}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Create Role</span></a></li>
                                <li class="sidebar-item"><a href="{{route('admin.info.role')}}" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu"> Role Info </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>