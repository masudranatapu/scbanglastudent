 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('institute_type.create') || $usr->can('institute_type.view') ||  $usr->can('institute_type.edit') ||  $usr->can('institute_type.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Institute Type
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.institute_type.create') || Route::is('admin.institute_type.index') || Route::is('admin.institute_type.edit') || Route::is('admin.institute_type.show') ? 'in' : '' }}">
                            @if ($usr->can('institute_type.view'))
                                <li class="{{ Route::is('admin.institute_type.index')  || Route::is('admin.institute_type.edit') ? 'active' : '' }}"><a href="{{ route('admin.institute_type.index') }}">Institute Type</a></li>
                            @endif
                            @if($usr->can('sub_institute_type.view'))
                                <li class="{{ Route::is('admin.sub_institute_type.index') || Route::is('admin.sub_institute_type.edit') ? 'active' : '' }}">
                                    <a href="{{ route('admin.sub_institute_type.index') }}">Sub Institute Type</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('class.create') || $usr->can('class.view') ||  $usr->can('class.edit') ||  $usr->can('class.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Class
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.class.create') || Route::is('admin.class.index') || Route::is('admin.class.edit') || Route::is('admin.class.show') ? 'in' : '' }}">
                            @if ($usr->can('class.view'))
                                <li class="{{ Route::is('admin.class.index')  || Route::is('admin.class.edit') ? 'active' : '' }}"><a href="{{ route('admin.class.index') }}">Class</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('shift.create') || $usr->can('shift.view') ||  $usr->can('shift.edit') ||  $usr->can('shift.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Shift
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.shift.create') || Route::is('admin.shift.index') || Route::is('admin.shift.edit') || Route::is('admin.shift.show') ? 'in' : '' }}">
                            @if ($usr->can('shift.view'))
                                <li class="{{ Route::is('admin.shift.index')  || Route::is('admin.shift.edit') ? 'active' : '' }}"><a href="{{ route('admin.shift.index') }}">Shift</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('group.create') || $usr->can('group.view') ||  $usr->can('group.edit') ||  $usr->can('group.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Group
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.group.create') || Route::is('admin.group.index') || Route::is('admin.group.edit') || Route::is('admin.group.show') ? 'in' : '' }}">
                            @if ($usr->can('group.view'))
                                <li class="{{ Route::is('admin.group.index')  || Route::is('admin.group.edit') ? 'active' : '' }}"><a href="{{ route('admin.group.index') }}">Group</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('division.create') || $usr->can('division.view') ||  $usr->can('division.edit') ||  $usr->can('division.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Division
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.division.create') || Route::is('admin.division.index') || Route::is('admin.division.edit') || Route::is('admin.division.show') ? 'in' : '' }}">
                            @if ($usr->can('division.view'))
                                <li class="{{ Route::is('admin.division.index')  || Route::is('admin.division.edit') ? 'active' : '' }}"><a href="{{ route('admin.division.index') }}">Division</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('district.create') || $usr->can('district.view') ||  $usr->can('district.edit') ||  $usr->can('district.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            District
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.district.create') || Route::is('admin.district.index') || Route::is('admin.district.edit') || Route::is('admin.district.show') ? 'in' : '' }}">
                            @if ($usr->can('district.view'))
                                <li class="{{ Route::is('admin.district.index')  || Route::is('admin.district.edit') ? 'active' : '' }}"><a href="{{ route('admin.district.index') }}">District</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('board.create') || $usr->can('board.view') ||  $usr->can('board.edit') ||  $usr->can('board.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Board
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.board.create') || Route::is('admin.board.index') || Route::is('admin.board.edit') || Route::is('admin.board.show') ? 'in' : '' }}">
                            @if ($usr->can('board.view'))
                                <li class="{{ Route::is('admin.board.index')  || Route::is('admin.board.edit') ? 'active' : '' }}"><a href="{{ route('admin.board.index') }}">Board</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('ads.view') ||  $usr->can('ads.edit'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Ads
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.ads.index') || Route::is('admin.ads.edit') ? 'in' : '' }}">
                            @if ($usr->can('ads.edit'))
                                <li class="{{ Route::is('admin.ads.index')  || Route::is('admin.ads.edit') ? 'active' : '' }}"><a href="{{ route('admin.ads.index') }}">Ads</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('post.approve') || $usr->can('post.view') ||  $usr->can('post.edit') ||  $usr->can('post.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Post
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.post.approve') || Route::is('admin.post.index') || Route::is('admin.post.edit') || Route::is('admin.post.show') ? 'in' : '' }}">
                            @if ($usr->can('post.view'))
                                <li class="{{ Route::is('admin.post.index')  || Route::is('admin.post.edit') ? 'active' : '' }}">
                                    <a href="{{ route('admin.post.index') }}">All Post</a>
                                </li>
                            @endif
                            @if($usr->can('post.approve'))
                            <li class="">
                                <a href="{{ route('admin.post.pending_post') }}">Pending Post</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                     @if ($usr->can('institute.approve') || $usr->can('institute.view') ||  $usr->can('institute.edit') ||  $usr->can('institute.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Institute
                        </span></a>
                        <ul class="collapse">
                            @if ($usr->can('institute.view'))
                                <li class="{{ Route::is('admin.institute.index')  || Route::is('admin.institute.edit') ? 'active' : '' }}">
                                    <a href="{{ route('admin.institute.index') }}">All Institute</a>
                                </li>
                            @endif
                            @if($usr->can('institute.approve'))
                            <li class="{{ Route::is('admin.institute.pending_institute') ? 'active' : '' }}">
                                <a href="{{ route('admin.institute.pending_institute') }}">Pending Institute</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->